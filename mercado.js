
$(document).ready(function(){

    $('.panel-body').show(1000);
    
    $('#btn_lista_venda').click(function(){
        $('#div_lista_vendas').show(1000);
        $('#div_inicio').hide(1000);
      })
  
      $('#btn_lista_produto').click(function(){
        $('#div_lista_vendas').hide(1000);
        $('#div_inicio').show(1000);
      })

    function qtdMais(){
        var valor = $('#qtd_cart').val();
        if(valor == '' || valor == 0){
            valor = 0;
        }
        valor = parseInt(valor,10)+1;
        $('#qtd_cart').val(valor);
    }
    
    function qtdMenos(){
        var valor = $('#qtd_cart').val();
        if(valor == '' || valor == 0){
            valor = 0;
        }
        valor = parseInt(valor,10)-1;
        if(valor < 0){
            valor = '';
        }
        $('#qtd_cart').val(valor);
    }

    function vlrTotal(){
        var qtd = $('#qtd_cart').val();
        var vlr_und = $('#vlr_und').val();
        var vlr_total = qtd * vlr_und;
        $('#vlr_total').val(vlr_total);
    }

    function impostoTotal(){
        var qtd = $('#qtd_cart').val();
        var vlr_und = $('#vlr_und').val();
        var imposto = $('#imposto').val();
        var imposto_total = (qtd * vlr_und)*imposto/100;
        $('#imp_total').val(imposto_total);
    }
    
    $('.btn-mais').click(function(){
        qtdMais();
        vlrTotal();
        impostoTotal();
    })

    $('.btn-menos').click(function(){
        qtdMenos();
        vlrTotal();
        impostoTotal();
    });

    $('#qtd_cart').mouseleave(function(){
        vlrTotal();
        impostoTotal();
    });

});
