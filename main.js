$(document).ready(function(){
    $('#manage').click(function(e){
        $(".active").removeClass('active');
        $(e.target).addClass('active');
        e.preventDefault();
        
        $('div.pageN').hide();
        $('div.competition').addClass('pageN').fadeIn(2);
    })
    $('#classement').click(function(e){
        $(".active").removeClass('active');
        $(e.target).addClass('active');
        e.preventDefault();
        $('div.pageN').hide();
        $('div.classementA').addClass('pageN').fadeIn(2);
    })
    $('#match').click(function(e){
        $(".active").removeClass('active');
        $(e.target).addClass('active');
        e.preventDefault();
        $('div.pageN').hide();
        $('div.resultat').addClass('pageN').fadeIn(2);
    })


    let Width1 = $(document).outerWidth();
    if(Width1 <=480){
      $('.menu1').css({
        'position':'fixed',
         'top': 95,
         'box-shadow': '0px 6px 25px 1px grey',
         'transition': '0.2s  box-shadow ease-in',
         'display': 'None',
         
      });
    }
    $(document).on('resize',()=>{
        Width1 = $(document).outerWidth();
        if(Width1<=480){
          $('.menu1').css({
            'position':'fixed',
             'top': 95,
             'box-shadow': '0px 6px 25px 1px grey',
             'transition': '0.2s  box-shadow ease-in',
             'display':'None'
          });
        }else{
 
        }
    })
    let height = $('.tete').outerHeight();
    $(document).on('scroll',()=>{
      height = $('.tete').outerHeight();
      if(height<=95){
        if(Width1 >480){
          $('.menu1').css({
            'position':'fixed',
             'top': 95,
             'box-shadow': '0px 6px 25px 1px grey',
             'transition': '0.2s  box-shadow ease-in',
             'width':'25%'
          });
          $('.topajuste').css({
            'margin-top':290
          });
        }else{
          $('.topajuste').css({
            'margin-top':195
          });
        }
  

        
      }else{
        if(Width1>480){
          $('.menu1').css({
            'position':'relative',
            'top':5,
            'box-shadow': '0px 0px 0px 0px grey',
            'transition': '0s  box-shadow ease-in',
            'width':'100%'
          });
        }

        $('.topajuste').css({
          'margin-top': 0
        });
       
      }
    })
    
 

})




