# roteador
Programa para o uso de rotas em APIS RESTFULL com PHP sem necessitar utilizar framework

Os arquivos router.php e index.php ficam na raíz do seu projeto e se encarrega de enviar os parâmetros para a sua classe.
Um cuidado que você deve ter é que todos os métodos de sua classe precisam receber um vetor como parâmetro pois é dessa maneira que o 
roteador enviará os parâmetros para ele.

A classe Exibir é apenas um exemplo que você têm de como o router se comunica com as suas classes.

Use este roteador como quiser e adaptá-lo aos seus projetos e seja feliz criando suas aplicações com um sistema de rotas super simples e leve.

Exemplo de chamada GET: http://localhost/boletimDeNoticias/listarUsuarios

E no caso de chamadas POST passamos o nome da Classe/Método que queremos executar sem passar os parâmetros via URL.

Tipo de licença: Licença MIT.
