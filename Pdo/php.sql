DROP SCHEMA IF EXISTS php;
CREATE SCHEMA php;
USE php;

CREATE TABLE livros (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome varchar(70) NOT NULL,
  genero varchar(20) DEFAULT NULL,
  valor varchar(8) DEFAULT NULL,
  descricao longtext,
  local varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `livros` (`id`, `nome`, `genero`, `valor`, `descricao`, `local`) VALUES
(1,'Viagem ao Centro da Terra','ficção','R$ 48,93','Precursor do gênero ficção científica no século XIX, Viagem ao Centro da Terra (no original Voyage au Centre de la Terre) é um clássico da literatura universal lançado no ano de 1864.

Viagem ao Centro da Terra trata-se de uma aventura protagonizada por Otto Lidenbrock, pelo sobrinho Axel e pelo guia Hans Bjelke. Acredita-se que a história tenha sido inspirada em uma viagem que o próprio Verne teria feito para a Noruega e para outros países escandinavos.','img/viagem.jpg'),
(2, 'A tragédia de Macbeth', 'tragédia', 'R$ 40,41', 'Macbeth é uma das obras mais contundentes do dramaturgo britânico William Shakespeare. Nesta tragédia, considerada a mais concisa, ele enfoca a ambição humana, a cobiça desmedida, e os fantasmas que assombram os atos criminosos. É possível que o autor tenha elaborado esta história entre 1603 e 1606, não passando, porém, de 1607.', 'img/tgd.jpg'),
(3, 'Sátiras', 'sátiras', 'R$ 54,40', 'Sátiras é uma coleção de poemas satíricos escritos pelo autor romano Juvenal no final do Século I e início do Século II.', 'img/sat.jpg'),
(4, 'Delicio Problema', 'romance', 'R$ 63,98', ' Duke sabia que Lexi era problema no momento em que ela pôs os pés no seu bar, trazendo consigo seu gênio forte. Ela procura um emprego e ele apenas ri, no início, mas a verdade é que está desesperado por ajuda.

Lexi tem uma regra: nada de repetições. Ela adora sexo, mas não quer pertencer a homem nenhum. O problema é que não consegue tirar Duke da cabeça. A atração sexual entre os dois faísca o tempo todo.

Ela fica sabendo que o bar corre o risco de fechar e ela é a única que pode salvá-lo, mas será que Duke vai aceitar ajuda de uma amiga e, realmente, será que eles são apenas “amigos”?', 'img/roma.jpg'),
(5, 'O Exorcista', 'horror', 'R$ 49,90', 'O Exorcista é o título de um romance de terror, escrito pelo autor estadunidense William Peter Blatty, publicado pela editora americana Harper & Row e lançado originalmente em 1971. O livro conta a história de Regan MacNeil, uma garota de 12 anos que é possuída pelo demônio. Há boatos de que a história do livro seja baseada em um caso de exorcismo real. Em 1973, o livro virou um filme de grande sucesso, dirigido por William Friedkin. ', 'img/hor.png'),
(6, 'Crônicas e Brisas Desnudando a Alma', 'crônicas', 'R$ 42,30', 'Este trabalho reune textos que trazem a reflexao questoes sobre relacionamentos, atitudes, decisoes. Penso que levar uma ideia, ou ideias ao publico, e de certa forma expor-se. Desnudar a alma. Inevitavelmente estamos com o nosso todo para a observacao, para a critica. Mas por seguro que isto nao nos deve inibir. Ao contrario, o prosseguir e a mola mestra. O real motivo propulsor da caminhada. Pode-se estar efetivamente diante de uma encruzilhada, mas o final e indecifravel, a nao ser que estejamos dispostos a prosseguir. Desta feita, lancado esta o desafio. Exposta e aberta estamos a todas as criticas para a melhoria do nosso ser.', 'img/cron.png'),
(7, 'A Bela e a Fera', 'conto', 'R$ 27,80', 'Bela é inteligente, engenhosa, inquieta e mais uma porção de coisas. Ela anseia escapar de seu modesto e provinciano vilarejo. Quer explorar o mundo, apesar de seu pai relutar em deixar sua casinha para o caso de a mãe de Bela retornar – mãe da qual ela mal se lembra. Um dia, os desejos da garota por novas aventuras acabam por se realizar – mas não da maneira que ela imaginava. Agora ela é cativa de uma terrível fera, dentro de um castelo enfeitiçado. Quando Bela toca a rosa encantada da Fera, intrigantes imagens inundam a mente da jovem – imagens da mãe que ela acreditava que nunca mais veria. Ainda mais estranho que isso, ela descobre que sua mãe é ninguém menos que a bela Feiticeira que amaldiçoou a Fera, seu castelo e todos os seus habitantes. Chocados e confusos, Bela e Fera devem se unir para desvendar um assombroso mistério sobre suas famílias. Um conto às avessas de A Bela e a Fera é uma saborosa e encantadora releitura, inaugurando uma série de livros para o público jovem adulto que reconta os clássicos Disney de um jeito jamais imaginado!', 'img/cont.jpg'),
(8, 'Anjos e Demônios', 'aventuras', 'R$ 44,47', 'Robert Langdon, o famoso professor de simbologia de Harvard, vive sua primeira aventura em Anjos e Demônios, quando tenta impedir que uma antiga sociedade secreta destrua a Cidade do Vaticano.
Às vésperas do conclave que vai eleger o novo Papa, Langdon é chamado às pressas para analisar um misterioso símbolo marcado a fogo no peito de um físico assassinado em um grande centro de pesquisas na Suíça.
Ele descobre indícios de algo inimaginável: a assinatura macabra no corpo da vítima é dos Illuminati, uma poderosa fraternidade que ressurgiu disposta a levar a cabo a lendária vingança contra a Igreja Católica. De posse de uma nova arma devastadora, roubada do centro de pesquisas, ela ameaça explodir a Cidade do Vaticano e matar os quatro cardeais mais cotados para a sucessão papal.
Correndo contra o tempo, Langdon voa para Roma junto com Vittoria Vetra, uma bela cientista italiana. Numa caçada frenética por criptas, igrejas e catedrais, os dois desvendam enigmas e seguem uma trilha que pode levar ao covil dos Illuminati - um refúgio secreto onde está a única esperança de salvação da Igreja nesta guerra entre ciência e religião.', 'img/avt.png'),
(9, 'A autobiografia de Martin Luther King', 'autobiografia', 'R$ 53,40', ' Um dos maiores símbolos da luta por igualdade, justiça e paz da humanidade, Martin Luther King liderou uma revolução que mudou os Estados Unidos e influenciou o mundo inteiro. Por sua política de resistência e transformação social através da não violência, recebeu o Prêmio Nobel da Paz em 1964.

Com base em arquivo inédito de textos autobiográficos do próprio King, incluindo cartas e diários não publicados, assim como filmes e gravações, Clayborne Carson - historiador da Universidade Stanford e diretor do Martin Luther King Jr. Research and Education Institute - cria um inesquecível retrato em primeira pessoa do grande líder. ', 'img/aut.png');

CREATE TABLE usuario (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome varchar(150) NOT NULL,
  usuario varchar(18) NOT NULL,
  email varchar(150) NOT NULL,
  telefone varchar(11) NOT NULL,
  senha varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

CREATE TABLE pag (
  id INT PRIMARY KEY AUTO_INCREMENT,
  pag VARCHAR(22)
);

INSERT INTO pag (id,pag) VALUES 
  (1,'dinheiro'),
  (2,'cartão de credito'),
  (3,'boleto bancário'),
  (4,'cheque'),
  (5,'tranferência bancária');

CREATE TABLE historico (
  id INT PRIMARY KEY AUTO_INCREMENT,
  idlivro INT,
  idUsuario INT,
  idPag INT,
  FOREIGN KEY (idlivro) REFERENCES livros (id),
  FOREIGN KEY (idUsuario) REFERENCES usuario (id),
  FOREIGN KEY (idPag) REFERENCES pag (id)
);

