# Início 15/04/2024 | Entrega 29/04/2024

### Ambiente de Desenvolvimento
[CONFIG](./CONFIG.md)

Faça um fork desse projeto, coloque seu nome na branch `git checkout -b seuNome` e faça um pull request com a sua entrega

### Desafio: Desenvolvimento de Aplicação de Gestão de Alunos para Academia

#### Nível: Iniciante

1.  **Configuração do Ambiente de Desenvolvimento:**
    
    -   Configure um ambiente de desenvolvimento local com PHP e Laravel.
    -   Instale o Laravel utilizando o Composer.
    -   Crie um novo projeto Laravel.
2.  **Criação do Banco de Dados:**
    
    -   Projete e crie o banco de dados para a aplicação de gestão de alunos.
    -   Considere as tabelas necessárias para armazenar informações sobre alunos, planos de treinamento, aulas, etc.
    -   Utilize o sistema de migrations do Laravel para criar as tabelas.
3.  **Criação de Modelos e Relacionamentos:**
    
    -   Crie os modelos necessários para representar as entidades do sistema, como Aluno, Plano de Treinamento, Aula, etc.
    -   Estabeleça os relacionamentos adequados entre os modelos, como um aluno pode estar associado a vários planos de treinamento, etc.
4.  **Implementação da Autenticação:**
    
    -   Utilize o sistema de autenticação do Laravel para criar autenticação de usuários.
    -   Permita que apenas usuários autenticados acessem as funcionalidades da aplicação.

#### Nível: Intermediário

5.  **Criação de CRUD para Alunos:**
    
    -   Implemente um CRUD (Create, Read, Update, Delete) para gerenciar os alunos.
    -   Permita a adição, visualização, edição e exclusão de alunos.
6.  **Gestão de Planos de Treinamento:**
    
    -   Crie funcionalidades para gerenciar os planos de treinamento oferecidos pela academia.
    -   Permita a criação, edição e exclusão de planos de treinamento.
7.  **Gestão de Aulas:**
    
    -   Implemente funcionalidades para marcar e gerenciar as aulas oferecidas pela academia.
    * * Por exemplo, quantidade de alunos que compareceram nessa aula
    * * Dashboard para mostrar os alunos que compareceram, não será necessário front-end dessa feature, somente um endpoint com essa consulta. Quanto mais criatividade melhor.
    -   Permita que os alunos possam se inscrever e cancelar a participação em aulas.

# Requisitos
* Código limpo.
* Pensamento crítico.
* Domínio sobre Programação Orientada a Objetos (Herança, Polimorfismo, Encapsulamento, Abstração, Injeção e Inversão de Dependencias, SOLID etc).
* Queries simples e complexas.
* * Exemplo 1: uma consulta que mostre se o usuário é ativo ou não na Academia, verificando a recorrencia dele sobre as aulas.
* * Exemplo 2: uma consulta que verifique o aniversário do aluno, para envio de promoções (não será necessário implementar esse serviço de envio de promoções, somente a consulta). Observando que, se estamos em Janeiro e usuário X faz aniversánio no mês de Fevereiro, essa ação já deve estar contemplada antes do aniversário do usuário X.
* * Ou seja, eu como usuário, desejo uma promoção de aniversário, mas se essa promoção me avisar no mesmo dia, eu não me programei para essa promoção, logo eu a perdi, então é interessante considerar, um mês de antecêdencia para programação do usuário.
* Validações dos campos na requisição
* * Se é requerido, se é do tipo esperado, se atingiu o máximo de caracteres.
* Validações de genero, se é do tipo M para Masculino, F para Feminino, N para Neutro, X para não quer selecionar.
* * Exemplo: "M", "F", "N", "X"

# Avaliações
* Será avialiado código limpo, pensamento crítico, domínio sobre Programação Orientada a Objetos (Herança, Polimorfismo, Encapsulamento, Abstração, Injeção e Inversão de Dependencias).

* Será avaliado montagem de queries (complexidade e simplicidade).

* Separação dos commits e semantica de commit