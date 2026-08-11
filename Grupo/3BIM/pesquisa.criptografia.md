alunos: Bruno Bandeira, Daniel Ferreira, Enzo Silva e Heitor de Lima

🔐 Criptografia no PHP

A criptografia é uma técnica utilizada para proteger informações, evitando que pessoas não autorizadas tenham acesso aos dados. No PHP existem diferentes métodos, cada um com uma finalidade específica.

---

🔒 AES (Advanced Encryption Standard)

O AES é um algoritmo de criptografia simétrica, ou seja, utiliza uma chave para criptografar e descriptografar informações.

É utilizado para proteger dados que precisam ser recuperados posteriormente, como arquivos e informações confidenciais.

Exemplo de uso no PHP:

openssl_encrypt()

Importância: protege dados sensíveis mantendo a informação segura.

---

#️⃣ MD5

O MD5 é uma função de hash que gera uma sequência de 128 bits.

Apesar de ser bastante conhecido, atualmente é considerado inseguro para proteção de senhas devido às suas vulnerabilidades.

Exemplo:

md5("texto");

Importância: ainda aparece em sistemas antigos e verificações simples de arquivos, mas não deve ser usado para senhas.

---

🔐 SHA-256

O SHA-256 é um algoritmo de hash da família SHA-2 que gera um resultado de 256 bits.

É utilizado para verificar integridade de dados, assinaturas digitais e sistemas de segurança.

Exemplo:

hash("sha256", "texto");

Importância: oferece maior segurança que o MD5 e é usado em diversas aplicações modernas.

---

🔐 SHA-512

O SHA-512 também pertence à família SHA-2, mas gera um hash de 512 bits.

É utilizado em aplicações que precisam de um nível maior de segurança para criação de hashes.

Exemplo:

hash("sha512", "texto");

Importância: permite gerar hashes mais longos e resistentes.

---

🛡️ password_hash() do PHP

O "password_hash()" é uma função criada especialmente para armazenar senhas com segurança.

Ela utiliza algoritmos adequados para senhas e adiciona um salt, tornando cada hash único.

Exemplo:

$senha = password_hash("123456", PASSWORD_DEFAULT);

Para verificar uma senha:

password_verify($senha, $hash);

Importância: é a forma recomendada pelo PHP para guardar senhas de usuários.

---

📊 Comparação rápida

Método| Tipo| Uso principal
AES| Criptografia| Proteger dados recuperáveis
MD5| Hash| Sistemas antigos e verificações simples
SHA-256| Hash| Integridade e segurança de dados
SHA-512| Hash| Hashes mais fortes
password_hash()| Hash de senha| Armazenamento seguro de senhas

---

✅ Conclusão

Cada método possui uma função diferente:

- AES protege informações que precisam ser recuperadas.
- MD5 é antigo e não recomendado para segurança.
- SHA-256 e SHA-512 são usados para criação de hashes seguros.
- password_hash() é a melhor opção para armazenar senhas em aplicações PHP.

O uso correto dessas ferramentas ajuda a criar sistemas mais seguros e proteger informações importantes.Essa versão fica mais adequada para uma atividade escolar no GitHub, sem ficar muito extensa.
