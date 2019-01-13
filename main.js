$(document).ready(function(){
    $('#manage').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('active')){
            $(".active").removeClass('active');
            $(this).addClass('active');
            $('div.pageN').fadeOut(400);
            $('div.competition').addClass('pageN').fadeIn("slow");
        }
    })
    $('#classement').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('active')){
            $(".active").removeClass('active');
            $(this).addClass('active');
            $('div.pageN').fadeOut(400);
            $('div.classementA').addClass('pageN').fadeIn("slow");
        }
    })
    $('#match').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('active')){
            $(".active").removeClass('active');
            $(e.target).addClass('active');
            $('div.pageN').fadeOut(400)
            $('div.resultat').addClass('pageN').fadeIn("slow");
        }
    })
    $('#admin').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('active')){
            $(".active").removeClass('active');
            $(this).addClass('active');
            $('div.pageN').fadeOut(400);
            $('div.admin').addClass('pageN').fadeIn('slow');
        }
    })
    $('.resultat .menu1 li a').click(function(e){
        e.preventDefault();
      
        if(!$(this).hasClass('present')){
            $('.resultat .menu1 li a.present').removeClass('present')
            $(this).addClass('present')
            if($(this).hasClass('phase')){
                $('.resultat .tout.present').fadeOut(400)
                $('.resultat .tout.rpoule').fadeIn('slow').addClass('present')
               
            }else{
                if($(this).hasClass('quart')){
                    $('.resultat .tout.present').fadeOut(400)
                    $('.resultat .tout.quart').fadeIn('slow').addClass('present')
                }else{
                    if($(this).hasClass('demi')){
                        $('.resultat .tout.present').fadeOut(400)
                        $('.resultat .tout.demi').fadeIn('slow').addClass('present')
                    }else{
                        if($(this).hasClass('finale')){
                            $('.resultat .tout.present').fadeOut(400)
                            $('.resultat .tout.finale').fadeIn('slow').addClass('present')
                        }
                    }
                }
            }
    
        }
        
    });
    $('.competition .menu1 li a').click(function(e){
        e.preventDefault();
      
        if(!$(this).hasClass('present')){
            $('.competition .menu1 li a.present').removeClass('present')
            $(this).addClass('present')
            if($(this).hasClass('phase')){
                $('.competition section.present').fadeOut(400)
                $('.competition .tout.phase_poule').fadeIn('slow').addClass('present')
               
            }else{
                if($(this).hasClass('quart')){
                    $('.competition section.present').fadeOut(400)
                    $('.competition section.quart').fadeIn('slow').addClass('present')
                }else{
                    if($(this).hasClass('demi')){
                        $('.competition section.present').fadeOut(400)
                        $('.competition section.tout.demi').fadeIn('slow').addClass('present')
                    }else{
                        if($(this).hasClass('finale')){
                            $('.competition section.present').fadeOut(400)
                            $('.competition section.finale').fadeIn('slow').addClass('present')
                        }else{
                            if($(this).hasClass('new_comp')){
                                $('.competition section.present').fadeOut(400)
                                $('.competition section.new_comp').fadeIn('slow').addClass('present')
                            } 
                        }
                    }
                }
            }
    
        }
        
    });
    
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
    $(this).on('resize',()=>{
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
    $(this).on('scroll',()=>{
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




