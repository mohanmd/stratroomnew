import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { InitiativesPageRoutingModule } from './initiatives-routing.module';

import { InitiativesPage } from './initiatives.page';
import { IntiativeModalpopupPage } from '../intiative-modalpopup/intiative-modalpopup.page';


@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
<<<<<<< HEAD
    InitiativesPageRoutingModule
=======
    InitiativesPageRoutingModule,
>>>>>>> 748e1f7a80c9edea4bce34c2f1de4f2eba21c3c7
  ],
  declarations: [
    InitiativesPage, 
    IntiativeModalpopupPage
  ],
  entryComponents: [ IntiativeModalpopupPage ],
})
export class InitiativesPageModule {}
