let classement = [];
let tab=[];
function createThumbnail(file) {
    
    var reader = new FileReader();
    
    reader.addEventListener('load', function() {
       
        $('#prev img').attr('src',this.result+'');
        
    });

    reader.readAsDataURL(file);
   
}
function mat_div(match){

}
var offline = false;
var pile = [];
window.addEventListener("online",(e)=>{
    if(pile!=[]){
       
        for(let tach of pile){
            tach['fonction'](...tach['argument'])
        }
    }
    offline = false;
},false);

window.addEventListener("offline",(e)=>{
    offline = true;
},false);

var gestion_err_reseau =(fonction,...argument)=>{
    if(!({fonction:fonction,argument:argument} in pile))
        pile.push({fonction:fonction,argument:argument})

}
function save_token(name,value){
    document.cookie = `${name}=${value};path=/`;
}
function sup(){
    for(let i of tab){
        $(i).css({
            display:'none'
        })
    }
    tab = []
}
function get(){
    get_match(1);
    get_match(2);
    get_match(3);
    get_classement();
    get_quart(); 
    get_demi();    
}
function get_quart(){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=4`,
        success:(data)=>{
           
            match_q(data[0])
            match_q(data[1])
            match_q(data[2])
            match_q(data[2])

        },error:(err)=>{
            gestion_err_reseau(get_quart)
        }
    })    
}
function get_demi(){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=5`,
        success:(data)=>{
           
            match_d(data[0])
            match_d(data[1])

        },error:(err)=>{
            gestion_err_reseau(get_demi)
        }
    })    
}
function match_q(i){
    $.post({
        url:'/footapp2/app/elements/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
            let t = $(data)
            
            let ar = $('<article/>').addClass('groupmatch').append(t)
            tab.push(ar)
           $('.tout.quart').append(ar)
        }
    })
}
function match_d(i){
    $.post({
        url:'/footapp2/app/elements/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
            let t = $(data)
            
            let ar = $('<article/>').addClass('groupmatch').append(t)
            tab.push(ar)
           $('.tout.demi').append(ar)
        }
    })
}
function match_p(i,j,p){
    $.post({
        url:'/footapp2/app/elements/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
            let t = $(data)
            tab.push(t)
           $(`#matchj${j}${p}`).append(t)
        }
    })
}
function match_pm(i,j,p){
    $.post({
        url:'/footapp2/app/competition/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
           let t = $(data)
           $(t).find('form').on('submit',function(e){
            e.preventDefault();
            $.post({
                url:'/footapp2/controllers/upmatch.php',
                data:$(this).serialize(),
                success:(data)=>{
                    sup();
                    get()
                }
            })
        
           })
            $(`#matchmj${j}${p}`).append(t)
        }
    })
}
function match_qm(i){
    $.post({
        url:'/footapp2/app/competition/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
           let t = $(data)
           $(t).find('form').on('submit',function(e){
            e.preventDefault();
            $.post({
                url:'/footapp2/controllers/upmatch.php',
                data:$(this).serialize(),
                success:(data)=>{
                    sup();
                    get();
                }
            })
        
           })
            $('.quart.m article').append(t)
        }
    })
}
function match_dm(i){
    $.post({
        url:'/footapp2/app/competition/match/match.php',
        data:`equipe1=${i.equipe1}&jouer=${i.status==1}&but1=${i.but1}&but2=${i.but2}&equipe2=${i.equipe2}&photo1=${i.photo1}&photo2=${i.photo2}`,
        success:(data)=>{
           let t = $(data)
           $(t).find('form').on('submit',function(e){
            e.preventDefault();
            $.post({
                url:'/footapp2/controllers/upmatch.php',
                data:$(this).serialize(),
                success:(data)=>{
                    sup();
                    get();
                }
            })
        
           })
            $('.demi.m article').append(t)
        }
    })
}
function get_match(niv){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=${niv}`,
        success:(data)=>{
           
            match_p(data[0],niv,'a')
            match_p(data[1],niv,'a')
            match_p(data[2],niv,'b')
            match_p(data[3],niv,'b')
            match_p(data[4],niv,'c')
            match_p(data[5],niv,'c')
            match_p(data[6],niv,'d')
            match_p(data[7],niv,'d')
        },error:(err)=>{
            gestion_err_reseau(get_match,niv)
        }
    })
    

}

function updatem(e){
    e.preventDefault();
    }
function get_classement(){
    $.post({
        url:'/footapp2/app/classement/poule/poule.php',
        data:'',
        success:(data)=>{
            let t = $(data);
            tab.push(t);
            $('.classement .topajuste').html(t);
        },
        error:(err)=>{
            gestion_err_reseau(get_classement)
        }
    })
}
function get_matchqm(){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=4`,
        success:(data)=>{
          
            match_qm(data[0])
            match_qm(data[1])
            match_qm(data[2])
            match_qm(data[3])
            
        },error:(err)=>{
            gestion_err_reseau(get_matchqm,niv)
        }
    })
    

}
function get_matchdm(){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=5`,
        success:(data)=>{
          
            match_dm(data[0])
            match_dm(data[1])
        
            
        },error:(err)=>{
            gestion_err_reseau(get_matchdm)
        }
    })
    

}
function get_matchm(niv){
    $.getJSON({
        
        url:`/footapp2/controllers/match.php?id=${niv}`,
        success:(data)=>{
           console.log(data[0])
            match_pm(data[0],niv,'a')
            match_pm(data[1],niv,'a')
            match_pm(data[2],niv,'b')
            match_pm(data[3],niv,'b')
            match_pm(data[4],niv,'c')
            match_pm(data[5],niv,'c')
            match_pm(data[6],niv,'d')
            match_pm(data[7],niv,'d')
        },error:(err)=>{
            gestion_err_reseau(get_matchm,niv)
        }
    })
    

}
function quart(){
    $.post({
        url:'footapp2/controllers/quart.php',
        data:'',
        success:(data)=>{
            alert('quart init')
        }
    })
}
function demi(){
    $.post({
        url:'footapp2/controllers/demi.php',
        data:'',
        success:(data)=>{
            alert('demi init')
        }
    })
}
$(document).ready(function(){
    $(document).outerHeight(200);
    get_match(1);
    get_match(2);
    get_match(3);
    get_matchm(1);
    get_matchm(2);
    get_matchm(3);
    get_quart();
    get_demi();
    get_matchqm();
    get_matchdm();
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
    $("#formc").on('submit',function(e){
        e.preventDefault()
        $.post({
            url:'/footapp2/controllers/connexion.php',
            data:$(this).serialize(),
            dataType:'json',
            success:(data)=>{
                    
                    if(data['status']){
                        if(data['message']){
                            window.location.pathname='/footapp2/'
                        }
                    }
            },
            error:(err)=>{
                    gestion_err_reseau(()=>{
                        $.post({
                            url:'/footapp2/controllers/connexion.php',
                            data:$(this).serialize(),
                            success:(data)=>{
                                window.location.pathname='/footapp2/index.php?page=manage'
                                    if(data['status']){
                                        if(data['message']){
                                            
                                        }
                                    }
                            },
                            error:(err)=>{
                                
                                    gestion_err_reseau(()=>{})
                            }
                        })
                    })
            }
        })
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
    $('#buttonph').click((e)=>{
        e.preventDefault();
        $('#file').trigger('click');
    
      });
 
    (()=> {

        
    
        var allowedTypes = ['png', 'jpg', 'jpeg', 'gif'],
            fileInput = document.querySelector('#file'),
            prev = document.querySelector('#prev');
        if(fileInput ){
            fileInput.addEventListener('change', function() {
    
                var files = this.files,
                    filesLen = files.length,
                    imgType;
                    this.photo = files[0]
                    createThumbnail(files[0]);
                
            });
        }
        
    
    })();
  
    
    
})



