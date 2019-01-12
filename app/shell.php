
<!--<app-header *ngIf="affiche" [script]="script" [style]="style" [manager]="manage"></app-header>-->

<?php include("elements/header/header.php");?>
<div class="container" [@routeAnimation]="getAnimationData(routerOutlet)">
    <router-outlet #routerOutlet="outlet"></router-outlet>
  </div>
<?php include("elements/footer/footer.php");?>