import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { InitModelpopupPageRoutingModule } from './init-modelpopup-routing.module';

import { InitModelpopupPage } from './init-modelpopup.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    InitModelpopupPageRoutingModule
  ],
  declarations: []
})
export class InitModelpopupPageModule {}
