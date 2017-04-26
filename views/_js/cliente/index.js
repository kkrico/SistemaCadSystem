$(function () {
    var $table = $('#table');

    function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a>  ',
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }


    var data = [
        {
            id : 0,
            nome: "Cliente de Exemplo",
            sobrenome: "Sobrenome do Cliente",
            rg: "RG do cliente",
            cpf :  "CPF do cliente"
        }
    ];
    var options = {
        columns: [
        {
            field: "id",
            align: 'center',
            valign: 'middle'
        },
        {
            field: "nome",
            align: 'center',
            valign: 'middle'
        },
        {
            field: "sobrenome",
            align: 'center',
            valign: 'middle'
        },
        {
            field: "rg",
            align: 'center',
            valign: 'middle'
        },
        {
            field: "cpf",
            align: 'center',
            valign: 'middle'
        },
       {
           field: 'operate',
           title: 'Ação',
           align: 'center',
           formatter: operateFormatter
       }],
        data : data
    }

    $table.bootstrapTable(options);

});