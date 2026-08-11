<?php
$pageTitle = "Criptografia em PHP";
include __DIR__ . "/includes/header.php";
?>

<main class="container">
    <section class="hero">
        <span class="badge">PHP • Segurança da Informação</span>
        <h1>Criptografia em PHP</h1>
        <p>
            Entenda os principais conceitos de segurança usados em aplicações PHP:
            criptografia simétrica, assimétrica, hash e codificação Base64.
        </p>
    </section>

    <section class="intro">
        <h2>O que é criptografia?</h2>
        <p>
            Criptografia é um conjunto de técnicas utilizadas para proteger informações,
            transformando dados legíveis em uma forma que dificulta o acesso por pessoas
            não autorizadas.
        </p>
        <p>
            Em aplicações web, ela pode ajudar a proteger informações durante o
            armazenamento e a transmissão. É importante diferenciar criptografia,
            hash e codificação, pois cada técnica possui uma finalidade diferente.
        </p>
    </section>

    <section class="cards">
        <article class="card">
            <div class="icon">🔐</div>
            <h2>Criptografia Simétrica</h2>
            <p>
                Usa a mesma chave para criptografar e descriptografar os dados.
                É adequada quando as partes envolvidas conseguem compartilhar a chave
                de forma segura.
            </p>
            <h3>Como funciona?</h3>
            <ol>
                <li>O texto original é fornecido ao algoritmo.</li>
                <li>Uma chave secreta é utilizada.</li>
                <li>O algoritmo produz o texto cifrado.</li>
                <li>A mesma chave é usada para recuperar o texto original.</li>
            </ol>
            <p class="php-example"><code>openssl_encrypt()</code> / <code>openssl_decrypt()</code></p>
            <p><strong>Exemplo:</strong> AES.</p>
        </article>

        <article class="card">
            <div class="icon">🔑</div>
            <h2>Criptografia Assimétrica</h2>
            <p>
                Trabalha com um par de chaves: uma chave pública e uma chave privada.
                A chave pública pode ser compartilhada, enquanto a privada deve ser
                mantida em segredo.
            </p>
            <h3>Como funciona?</h3>
            <ol>
                <li>Uma pessoa disponibiliza sua chave pública.</li>
                <li>Um dado pode ser protegido usando essa chave.</li>
                <li>A chave privada correspondente é usada para recuperar o dado.</li>
            </ol>
            <p class="php-example"><code>openssl_public_encrypt()</code> / <code>openssl_private_decrypt()</code></p>
            <p><strong>Exemplo:</strong> RSA.</p>
        </article>

        <article class="card">
            <div class="icon">#️⃣</div>
            <h2>Hash</h2>
            <p>
                Hash não é criptografia reversível. Um algoritmo transforma uma entrada
                em um valor de tamanho definido. Em geral, não se deve tentar recuperar
                o texto original a partir do hash.
            </p>
            <h3>Para que serve?</h3>
            <ul>
                <li>Verificação de integridade.</li>
                <li>Armazenamento seguro de senhas com funções apropriadas.</li>
                <li>Identificação de alterações em dados.</li>
            </ul>
            <p class="php-example"><code>hash()</code> e <code>password_hash()</code></p>
            <p><strong>Exemplos:</strong> SHA-256 e SHA-512.</p>
        </article>

        <article class="card">
            <div class="icon">📦</div>
            <h2>Base64</h2>
            <p>
                Base64 é uma <strong>codificação</strong>, não uma técnica de criptografia.
                Ela transforma dados em uma representação textual que pode ser facilmente
                revertida.
            </p>
            <h3>Como funciona?</h3>
            <ol>
                <li>Os dados são convertidos para uma representação Base64.</li>
                <li>O resultado pode ser transmitido como texto.</li>
                <li>Com a decodificação, os dados originais podem ser recuperados.</li>
            </ol>
            <p class="php-example"><code>base64_encode()</code> / <code>base64_decode()</code></p>
            <p><strong>Atenção:</strong> Base64 não protege uma informação contra leitura.</p>
        </article>
    </section>

    <section class="comparison">
        <h2>Comparando as técnicas</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Técnica</th>
                        <th>É reversível?</th>
                        <th>Usa chave?</th>
                        <th>Uso principal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Simétrica</td>
                        <td>Sim</td>
                        <td>Sim, uma chave</td>
                        <td>Proteger dados</td>
                    </tr>
                    <tr>
                        <td>Assimétrica</td>
                        <td>Sim</td>
                        <td>Par público/privado</td>
                        <td>Comunicação segura e troca de chaves</td>
                    </tr>
                    <tr>
                        <td>Hash</td>
                        <td>Não diretamente</td>
                        <td>Não necessariamente</td>
                        <td>Integridade e senhas</td>
                    </tr>
                    <tr>
                        <td>Base64</td>
                        <td>Sim</td>
                        <td>Não</td>
                        <td>Codificação de dados</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="php-section">
        <h2>Exemplos de funções do PHP</h2>

        <div class="code-box">
            <h3>Criptografia simétrica com OpenSSL</h3>
            <pre><code>$chave = "chave-secreta";
$iv = random_bytes(openssl_cipher_iv_length("aes-256-cbc"));

$cifrado = openssl_encrypt(
    "Mensagem secreta",
    "aes-256-cbc",
    $chave,
    OPENSSL_RAW_DATA,
    $iv
);</code></pre>
        </div>

        <div class="code-box">
            <h3>Hash de senha</h3>
            <pre><code>$senha = "minha-senha";

$hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);</code></pre>
        </div>

        <div class="code-box">
            <h3>Verificação de senha</h3>
            <pre><code>if (password_verify($senha, $hash)) {
    echo "Senha correta!";
}</code></pre>
        </div>
    </section>

    <section class="activity">
        <h2>🎯 Atividade proposta</h2>
        <p>
            Depois de estudar a página, responda:
        </p>
        <ol>
            <li>Qual é a diferença entre criptografia simétrica e assimétrica?</li>
            <li>Por que hash não deve ser confundido com criptografia?</li>
            <li>Por que Base64 não deve ser usado como proteção de uma senha?</li>
            <li>Qual função do PHP é indicada para criar um hash de senha?</li>
            <li>Cite uma situação em que a criptografia simétrica pode ser útil.</li>
        </ol>
    </section>

    <section class="warning">
        <h2>⚠️ Importante</h2>
        <p>
            MD5 e SHA-1 aparecem com frequência em exemplos antigos, mas não são
            recomendados para armazenamento de senhas. Para senhas em PHP, utilize
            <code>password_hash()</code> e <code>password_verify()</code>.
        </p>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
