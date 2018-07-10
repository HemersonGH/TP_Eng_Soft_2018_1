# TP_Eng_Soft_2018_1
<p> Trabalho Prático De Engenharia de Software - 2018/1 - Sistema 
Gerenciador De Atividades Curriculares </p>

 Os produtos de trabalho 
referente a esse projeto se encontra no Google Driver pelo Link:
<br /> 
https://drive.google.com/drive/folders/1qKuH4UJI4pZ4dgHFmJyi52-NaFw-a3wr 
<br /> 
<br /> 
Essa pasta conterá com as seguintes estruturas e 
documentos:
<br /> 
<b>Áudios Dos Requisitos:</b> Um documento descrevendo 
toda a entrevista feita com o cliente. 
<br />
<b>Backlog:</b> Um documento listando todos os itens que terão de ser desenvolvido para 
conclusão do projeto. 
<br />
 <b>Casos De Usos:</b> Todos os documentos relacionados a casos de uso e diagrama de caso de uso. 
<br />
<b>Cronograma De Atividades:</b> Um cronograma de como foi divido e feito todas as atividades estabelecidas. 
<br />
<b>Demais 
Atividades:</b> Todas os documento das demais atividades estabelecidas pelos professores. <br /> <b>Documentos De Visão De Produto:
</b> Um documento descrevendo o escopo e não escopo do projeto. 
<br /> 
<b>Frameworks E Ferramentas:</b> Um documento descrevendo todas as ferramentas e frameworks utilizados para o desenvolvimento do projeto. 
<br /> <b>Protótipo:</b> Um PDF com as páginas do protótipo do projeto. 
<br /> <b>Requisitos:</b> Todos os documentos relacionados aos requisitos do projeto. <br /> <b>Stakeholders:</b> Um documento 
descrevendo os principais interessados do projeto. 
<br /> 
<br /> 
<b>Divisão Da Equipe CS Dev:</b> 
<br /> Rafaela (Dev && Scrum Master && WebDesing)
<br /> Guilherme (Dev)
<br /> Gabriel (Dev)
<br />

<h2>Políticas de uso do Git</h2>
<b> Estruturas de pastas: </b> A base da estrutura de pastas seguirá a estrutura prédefinida do framework usado - <i> Laravel </i>.
Adicionando as páginas html usadas como guia para as views na pasta <i> /resources/views/html </i>

<b> Regras de commit: </b> O commit deve ser breve e conter em qual - ou quais - funcionalidades se foi trabalhado, identificando-a com uma sigla para o requisito rastreavel.

**Estratégia de branching:** Foi criada uma branch `melo`, onde foi realizado o versionamento da aplicação em Laravel. A branch `master` foi usada para criação das "páginas-base" do design do projeto.  

## Installing / Getting started

Before use, you need to properly install all **Laravel** requirements below:

1.    PHP >= 7.1.3
2.    OpenSSL PHP Extension
3.    PDO PHP Extension
4.    Mbstring PHP Extension
5.    Tokenizer PHP Extension
6.    XML PHP Extension
7.    Ctype PHP Extension
8.    JSON PHP Extension

You can follow my [laravel: getting started tutorial](https://github.com/GabrielMMelo/iot_server/blob/esp8266/resources/docs/pdf/Laravel.pdf) (PORTUGUESE LANGUAGE).

> You must to have `apache` and some DBMS, like `mysql` 

Then, you must `clone` our repo:

```shell
git clone https://github.com/HemersonGH/TP_Eng_Soft_2018_1
cd TP_Eng_Soft_2018_1/
```

After properly configure, run and test your apache, you need to use some laravel commands:


1. For first, copy and rename `/.env.example` to `/.env`.

2. Open it and write your environment configuration. 

3. So, create a new key (that's your unique key development):

```shell
php artisan key:generate
```

4. Make sure that the `vendor` folder has read permissions. You could do:

```shell
chmod -R 777 vendor/
```

**Attention:** it's not a practice recommended for production environments. 


> Now your're ready to **trophy**!
