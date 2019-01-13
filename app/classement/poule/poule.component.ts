
export class PouleComponent implements OnInit {


  ngOnInit() {
    this.comp.poule1.subscribe((e)=>{
      let t1 = [];
      let t2 = [];
      let t3 = [];
      let t4 = [];
      if(e.length != 0){
        for(let i=0;i<4;i++){
          if(e[i].nom =='GROUPE A'){
            t1 = e [i];
          }
          if(e[i].nom =='GROUPE B'){
            t2 = e [i];
          }
          if(e[i].nom =='GROUPE C'){
            t3 = e [i];
          }
          if(e[i].nom =='GROUPE D'){
            t4 = e [i];
          }
          this.poule1.next([t1,t2,t3,t4]);
  
        }
      }
      
    })
    if(sessionStorage.getItem('user')){
      this.id= JSON.parse( sessionStorage.getItem('user'))['tournois'][0];
    }else{
      if(sessionStorage.getItem('default')){
        this.id= JSON.parse( sessionStorage.getItem('default'))['tournois'];
        this.comp.get_poul(this.id,1)
        }else{
          this.compt.get_default().subscribe((e)=>{
            if(e){
              sessionStorage.setItem('default',JSON.stringify({tournois:[e[0].id]}));
              this.id= JSON.parse( sessionStorage.getItem('default'))['tournois'];
              this.comp.get_poul(this.id,1)
            }
          })
        }
    }

    this.comp.get_poul(this.id)
  }

}
