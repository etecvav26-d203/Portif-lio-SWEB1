# Atividade – Cookies e Sessions no PHP

## Exercício 1 – Pergunta conceitual

Cookies e sessions são usados para manter dados entre requisições no PHP, mas funcionam de formas diferentes.  
Os cookies são armazenados no navegador do usuário, enquanto as sessions ficam no servidor.  
Por isso, as sessions são mais seguras, já que o usuário não tem acesso direto aos dados.  
Cookies podem ser facilmente modificados pelo cliente, o que traz riscos.  
Em geral, cookies são usados para preferências e dados simples, como idioma.  
Já as sessions são mais indicadas para informações sensíveis, como login de usuários.  
Assim, cada um é usado conforme a necessidade de segurança.

---

## Exercício 2 – Pergunta de aplicação

Em um sistema de loja virtual, as sessions podem ser usadas para manter o usuário logado, armazenando seus dados no servidor com segurança.  
Também podem guardar itens do carrinho temporariamente enquanto o usuário navega.  
Já os cookies podem ser usados para salvar preferências do usuário, como idioma ou produtos visualizados recentemente.  
Cookies são úteis porque permanecem mesmo após fechar o navegador, dependendo da configuração.  
As sessions, por outro lado, são mais seguras para dados importantes.  
Dessa forma, o uso combinado dos dois melhora a experiência e a segurança do sistema.

---‌

## Exercício 3 – Pergunta de investigação

Na primeira execução do código, o cookie é criado, mas ainda não pode ser acessado imediatamente.  
Isso acontece porque ele só estará disponível na próxima requisição ao servidor.  
Ao atualizar a página, o valor do cookie passa a ser exibido corretamente.  
Nas ferramentas do navegador, é possível visualizar o cookie armazenado.  
Quando os cookies do site são limpos, o valor desaparece e o processo se reinicia.  
Isso mostra que o cookie depende do navegador para ser armazenado.  
Por isso, ele não aparece na primeira execução.

---


## Exercício 4 – Pergunta de reflexão

As sessions são preferidas para autenticação porque são mais seguras, já que os dados ficam no servidor.  
O navegador armazena apenas um identificador da sessão, reduzindo o risco de manipulação.  
Cookies podem ser alterados pelo usuário, o que pode comprometer a segurança.  
Além disso, sessions permitem maior controle sobre o tempo de login e encerramento.  
Usar apenas cookies pode trazer riscos como acesso indevido ou roubo de dados.  
Por isso, sistemas modernos utilizam sessions para proteger informações sensíveis dos usuários.

# Referências
RAMZY, H. How session and cookies works ? Disponível em: <https://medium.com/@hendelRamzy/how-session-and-cookies-works-640fb3f349d1>. Acesso em: 29 mar. 2026.

MANUAL. PHP: Variáveis predefinidas - Manual. Disponível em: <https://www.php.net/manual/pt_BR/reserved.variables.php>. Acesso em: 28 mar. 2026.

‌MANUAL. PHP: Sessões - Manual. Disponível em: <https://www.php.net/manual/pt_BR/book.session.php>. Acesso em: 30 mar. 2026.
