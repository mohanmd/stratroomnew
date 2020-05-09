import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { BudetPopupPageRoutingModule } from './budet-popup-routing.module';

import { BudetPopupPage } from './budet-popup.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    BudetPopupPageRoutingModule
  ],
  declarations: []
})
export class BudetPopupPageModule {}
