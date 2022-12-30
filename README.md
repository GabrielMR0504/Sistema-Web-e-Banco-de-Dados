Trabalho Prático

Sistema WEB com uso de banco de dados

Tema:
Sistema de venda de produtos de informática

Descrição do Banco de Dados
A loja pode ter vários produtos cadastrados, que contém dados específicos sobre cada produto, sendo eles: ID, nome, descrição, preço, imagem, tipo, marca. Para cada produto cadastrado os valores de ID são únicos.

O cliente possui seu CPF, nome completo, idade, endereço, e-mail e senha de acesso. A idade do cliente deve ser, obrigatoriamente, maior que 18 anos e seu CPF deve ser único. Além do mais, a senha tem que ter obrigatoriamente mais de 4 dígitos e o formato do email tem que ser compatível.

Teremos o item que será a relação dos produtos com a venda, dessa forma teremos uma tabela IDProduto, IDVenda, Quantidade, ProcoItem. Quando um produto novo é adicionado a tabela de itens ou a quantidade de algum produto existente é modificada, o preço da venda total relacionada ao produto é atualizado.

A forma de pagamento associada à compra e cliente possui um id único, o tipo (cartão de débito ou cartão de crédito), o nome do titular do cartão, o número do cartão, a data de vencimento, o CVV e o ID do cliente que está cadastrando o meio de pagamento. Ao inserir a forma de pagamento a data da venda é setada.

Uma venda é gerada a partir de alguma transação na loja, que ocorre quando em um carrinho tem uma quantidade de itens dentro dele. A venda possui um ID da venda, data da venda, preço total, endereço de entrega, CPF do cliente e também guarda as informações sobre a forma de pagamento, pelo id. O ID da venda tem que ser único para cada venda.
