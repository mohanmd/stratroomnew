import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { SwotdetailPageRoutingModule } from './swotdetail-routing.module';

import { SwotdetailPage } from './swotdetail.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    SwotdetailPageRoutingModule
  ],
  declarations: [SwotdetailPage]
})
export class SwotdetailPageModule {}
