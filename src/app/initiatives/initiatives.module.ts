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
    InitiativesPageRoutingModule,
  ],
  declarations: [InitiativesPage, IntiativeModalpopupPage],
  entryComponents: [ IntiativeModalpopupPage ]
})
export class InitiativesPageModule {}

