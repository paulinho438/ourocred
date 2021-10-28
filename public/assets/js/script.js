$(document).ready(function(){

    $('#administradorCampanhaAdd').bind('submit', function(e){
        e.preventDefault();
        let qtClientes = $('.noUi-tooltip').html();
        var funcionario = $('#funcionario').val();
        let token = $('#token').val();

        $('#botaoAdministradorCampanhaCriar').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...');

        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                funcionario : funcionario,
                qtClientes: qtClientes,
                _token: token,
            },
            dataType: 'json',
            url: '/painel/administrador/campanha/add',
            success: function(data) {
                if(data.error == ''){
                    document.location.reload(true);
                }else{
                    $('#botaoAdministradorCampanhaCriar').html('Criar');
                    alert(data.error);
                }
    
            }
        });
    });

});


function finalizarAtendimento(botao_press){
    let observacao = $('#observacao').val();
    let id = $('#idCampanha').val();
    let token = $('#token').val();
    let campanha_pai = $('#campanha_pai').val();
    let time = $('#time').html();
    
    if(observacao == ''){
        alert('Observações está vazio!');
        return false;
    }
    let botaoPress;
    if(botao_press == '0'){
        botaoPress = $('#enviar_consultor');
    }else{
        botaoPress = $('#marcar_atendido'); 
    }
    $(botaoPress).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...');

    $.ajax({
        type: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            id : id,
            botao_press: botao_press,
            observacao: observacao,
            campanha_pai: campanha_pai,
            _token: token,
            time : time,
        },
        dataType: 'json',
        url: '/painel/campanha/finalizaratendimento',
        success: function(data) {
            if(data.error == ''){
                document.location.reload(true);
            }else{
                if(botao_press == '0'){
                    $(botaoPress).html('Enviar para o consultor');
                }else{
                    $(botaoPress).html('Marcar como atendido');
                }
                
                alert(data.error);
            }

        }
    });
}