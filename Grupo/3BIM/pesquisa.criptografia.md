# Pesquisa sobre criptografias PHP

🔐 Criptografia no PHP

📖 Introdução

A criptografia é uma técnica utilizada para proteger informações, tornando os dados inacessíveis ou difíceis de serem compreendidos por pessoas que não possuem autorização.

Ela é muito importante no desenvolvimento de sistemas, principalmente em aplicações que trabalham com senhas, informações pessoais, arquivos e dados confidenciais.

No PHP existem diferentes ferramentas relacionadas à segurança, e cada uma possui uma finalidade diferente. Neste projeto serão apresentados:

- 🔒 AES
- #️⃣ MD5
- 🔐 SHA-256
- 🔐 SHA-512
- 🛡️ "password_hash()"

É importante entender que criptografia e hash não são a mesma coisa.

---

🔒 AES

AES (Advanced Encryption Standard) é um dos algoritmos de criptografia mais conhecidos e utilizados atualmente.

Ele utiliza criptografia simétrica, o que significa que uma chave é utilizada para proteger os dados e também para recuperar a informação original.

O funcionamento básico pode ser representado assim:

Informação original
        ↓
      AES + chave
        ↓
Informação criptografada
        ↓
   AES + chave
        ↓
Informação original

No PHP, o AES pode ser utilizado através da extensão OpenSSL.

Um exemplo de função utilizada para criptografia é:

openssl_encrypt()

E para descriptografar:

openssl_decrypt()

📌 Exemplo

<?php

$dados = "Informação confidencial";
$chave = "minha-chave";

$criptografado = openssl_encrypt(
    $dados,
    "AES-256-CBC",
    $chave,
    0,
    "1234567890123456"
);

echo $criptografado;
?>

«⚠️ Em aplicações reais, chaves e IVs devem ser gerenciados corretamente. O exemplo acima é apenas para demonstrar o funcionamento.»

⭐ Importância do AES

O AES é importante quando precisamos proteger informações que precisam ser recuperadas posteriormente.

Pode ser utilizado para proteger:

- Arquivos;
- Informações confidenciais;
- Dados armazenados;
- Informações transmitidas entre sistemas;
- Outros conteúdos que precisam ser descriptografados posteriormente.

---

#️⃣ MD5

MD5 (Message-Digest Algorithm 5) é uma função de hash criada para gerar uma representação de 128 bits de uma informação.

No PHP, podemos utilizar:

md5("texto");

Exemplo:

<?php

$texto = "Olá mundo";

echo md5($texto);

?>

O resultado normalmente possui 32 caracteres hexadecimais.

⚠️ MD5 é seguro?

Atualmente, não.

O MD5 possui vulnerabilidades conhecidas e não deve ser utilizado para proteger senhas ou informações que necessitam de segurança criptográfica.

Ele pode aparecer em:

- Sistemas antigos;
- Aplicações legadas;
- Algumas verificações simples de integridade.

Porém, para novos sistemas, existem opções muito mais adequadas.

🚫 Não utilize MD5 para senhas

Um exemplo que deve ser evitado:

$senha = md5($senha);

Para armazenar senhas em PHP, o recomendado é utilizar:

password_hash()

---

🔐 SHA-256

SHA-256 é uma função de hash pertencente à família SHA-2.

Ela produz um resultado de 256 bits, normalmente representado por 64 caracteres hexadecimais.

No PHP:

hash("sha256", "texto");

Exemplo:

<?php

$texto = "Olá mundo";

$hash = hash("sha256", $texto);

echo $hash;

?>

⭐ Importância do SHA-256

O SHA-256 é muito utilizado para:

- Verificação da integridade de arquivos;
- Verificação de dados;
- Assinaturas digitais;
- Aplicações criptográficas;
- Identificação de informações.

Por exemplo, se um arquivo sofrer alguma alteração, o hash gerado pode ser diferente. Isso permite verificar se o conteúdo foi modificado.

⚠️ SHA-256 para senhas

Embora o SHA-256 seja uma função de hash criptográfico forte para várias finalidades, não é recomendado utilizá-lo diretamente para armazenar senhas.

Por exemplo:

$senha = hash("sha256", "123456");

Esse método não possui as características específicas de lentidão e proteção contra tentativas massivas de adivinhação que um algoritmo próprio para senhas oferece.

Para senhas, utilize "password_hash()".

---

🔐 SHA-512

O SHA-512 também pertence à família SHA-2.

A principal diferença em relação ao SHA-256 é que ele produz um resultado de 512 bits, normalmente representado por 128 caracteres hexadecimais.

No PHP:

hash("sha512", "texto");

Exemplo:

<?php

$texto = "Olá mundo";

$hash = hash("sha512", $texto);

echo $hash;

?>

⭐ Importância do SHA-512

O SHA-512 pode ser utilizado em situações que precisam de uma função de hash criptográfico com saída de 512 bits.

Alguns exemplos são:

- Verificação de integridade;
- Assinaturas digitais;
- Identificação de dados;
- Aplicações de segurança;
- Sistemas criptográficos.

Assim como o SHA-256, o SHA-512 não deve ser utilizado diretamente para armazenar senhas.

---

🛡️ password_hash()

O "password_hash()" é uma função do PHP criada especificamente para realizar o hash seguro de senhas.

Ela é uma das ferramentas mais importantes para aplicações que possuem sistemas de cadastro e login.

Exemplo:

<?php

$senha = "MinhaSenha123";

$hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

echo $hash;

?>

O resultado será um hash que contém informações necessárias para que o PHP consiga verificar a senha posteriormente.

---

🧂 Salt

Uma característica importante do "password_hash()" é o uso automático de um salt.

O salt é um valor aleatório utilizado durante a criação do hash.

Isso significa que duas pessoas podem utilizar exatamente a mesma senha e ainda assim seus hashes armazenados podem ser diferentes.

Por exemplo:

Senha: MinhaSenha123

Usuário 1 → hash diferente
Usuário 2 → hash diferente

Isso aumenta a segurança do armazenamento das senhas.

---

🔎 password_verify()

Para verificar se uma senha digitada corresponde ao hash armazenado, utilizamos:

password_verify()

Exemplo:

<?php

$senha = "MinhaSenha123";

$hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

if (password_verify($senha, $hash)) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}

?>

Em um sistema real, o hash seria armazenado no banco de dados e, durante o login, "password_verify()" seria utilizado para verificar a senha informada.

A senha original não precisa ser armazenada no banco de dados.

---

🔄 Diferença entre AES e Hash

É muito importante não confundir os dois conceitos.

AES — Criptografia

A informação pode ser recuperada quando temos a chave correta.

Dado original
     ↓
   AES
     ↓
Dado criptografado
     ↓
   AES + chave
     ↓
Dado original

Hash — Função de resumo

O objetivo é gerar uma representação da informação.

Dado original
     ↓
    HASH
     ↓
Resultado do hash

O hash não foi criado para que o resultado seja convertido novamente na informação original.

Por isso:

AES → criptografar e posteriormente descriptografar

Hash → gerar uma representação da informação

---

🚨 Qual método utilizar?

A escolha depende do que o sistema precisa fazer.

🔒 Para proteger dados que precisam ser recuperados

Pode-se utilizar AES, desde que a implementação e o gerenciamento das chaves sejam feitos corretamente.

🔐 Para gerar hashes criptográficos

SHA-256 ou SHA-512 podem ser utilizados dependendo da finalidade do sistema.

🔑 Para armazenar senhas

A opção recomendada no PHP é:

password_hash()

E para verificar:

password_verify()

⚠️ Para sistemas novos

Não é recomendado utilizar:

md5()

para armazenar senhas.

Também não é recomendado simplesmente substituir MD5 por:

hash("sha256", $senha);

ou:

hash("sha512", $senha);

pois funções de hash gerais não substituem um algoritmo específico para armazenamento de senhas.

---

💻 Exemplo de cadastro seguro

Um cadastro simples pode gerar o hash da senha antes de armazená-la:

<?php

$senha = $_POST["senha"];

$hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

// O $hash pode ser armazenado no banco de dados.

?>

Dessa forma, o sistema não precisa guardar a senha original do usuário.

---

🔑 Exemplo de login

Durante o login, a senha digitada pode ser comparada com o hash armazenado:

<?php

$senhaDigitada = $_POST["senha"];

// Hash recuperado do banco de dados
$hashBanco = $usuario["senha"];

if (password_verify($senhaDigitada, $hashBanco)) {
    echo "Login realizado com sucesso!";
} else {
    echo "Senha incorreta!";
}

?>

---

📌 Resumo

AES

É um algoritmo de criptografia simétrica utilizado para proteger dados que precisam ser recuperados posteriormente.

MD5

É uma função de hash antiga e atualmente não recomendada para proteção de senhas.

SHA-256

É uma função de hash da família SHA-2 que produz um resultado de 256 bits e possui diversas aplicações de segurança.

SHA-512

Também pertence à família SHA-2, mas produz um resultado de 512 bits.

password_hash()

É uma função do PHP desenvolvida especificamente para armazenamento seguro de senhas.

password_verify()

É utilizada para verificar se uma senha corresponde ao hash armazenado.

---

✅ Conclusão

A segurança de uma aplicação depende da escolha correta das ferramentas.

O AES é indicado quando os dados precisam ser criptografados e posteriormente recuperados. O SHA-256 e o SHA-512 são funções de hash utilizadas em diversas aplicações de segurança. O MD5, por ser antigo e vulnerável, deve ser evitado em aplicações modernas, principalmente para senhas.

Para sistemas PHP que precisam armazenar senhas, a melhor prática é utilizar "password_hash()" junto com "password_verify()".

Conhecer a diferença entre criptografia, hash e armazenamento de senhas é fundamental para desenvolver aplicações mais seguras e proteger os dados dos usuários.
---

### Alunos:

Bruno Bandeira --
Daniel Ferreira --
Enzo Silva --
Heitor de Lima 
