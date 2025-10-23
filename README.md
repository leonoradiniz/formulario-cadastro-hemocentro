# 📋 Formulário Digital: Cadastro - Doador de Medula Óssea

Este projeto tem como objetivo digitalizar um formulário real - usando como base o Formulário do Hemocentro de Minas Gerais para Cadastro como Doador de Medula Óssea - para praticar a criação de páginas/formulários web.

**Status do projeto: _Em desenvolvimento_**

  - Os campos do formulário estão sendo inseridos, e sua estilização está em desenvolvimento.
  - Foi implementada uma lógica em PHP para que o nome do usuário aparecesse devidamente na página de agradecimento pelo cadastro como doador:
    - Se o usuário se cadastrar com seu nome de batismo, a primeira palavra do seu nome de batismo aparecerá no agradecimento - omitindo, portanto, seus sobrenomes.  
  **Exemplo:** "Obrigado por se registrar como doador(a) de medula óssea, Maria!"
    - Se o usuário se cadastrar com nome social, o agradecimento vai ser exibido com a primeira palavra do nome social, mesmo que o nome de batismo possa ter sido preenchido, por motivos legais de documentação.  
  **Exemplo:** "Obrigado por se registrar como doador(a) de medula óssea, João!"

**Próximas atualizações: _Em desenvolvimento_**

- Para melhorar a experiência do usuário e prevenir a coleta de informações incorretas, o campo do formulário referente a **"Local de Nascimento"** terá o seguinte funcionamento:
  
  - Se a nacionalidade selecionada for **"Brasileiro(a)":** o usuário informará seu Estado e Cidade de nascimento por meio de campos de seleção;
  - Os valores desses campos de seleção serão os respectivos dados consumidos da **API de Localidades do IBGE,** através de código **JavaScript.**
  - **Exemplo:** Se o usuário selecionar "MG" no input "Estado", as opções de seleção no input "Cidade" serão as cidades de MG (Minas Gerais), conforme a coleção de dados fornecida pelo IBGE.
  - Se a nacionalidade selecionada for **"Estrangeiro(a)":** o usuário informará seu País, Estado/Província e Cidade de nascimento por meio de inputs de texto. Inclusive, os inputs para preenchimento de estrangeiros estarão desabilitadas para o usuário que selecionar nacionalidade brasileira.

**Tecnologias utilizadas:**

  - HTML e CSS para marcação e estilização do formulário;
  - PHP para processar a lógica do lado do servidor, manipulando os dados que o formulário envia pelo método POST. O envio é feito para o servidor Apache (utilizando XAMPP). O PHP também executa a lógica correta para exibir os dados de acordo com o preenchimento de cada usuário nos campos de "Nome" e "Nome Social";
  - JavaScript será usado para dinamizar o preenchimento dos campos de seleção de "Local de Nascimento", consumindo dados da API de Localidades do IBGE (API Pública).
