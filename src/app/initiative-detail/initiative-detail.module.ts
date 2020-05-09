import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { InitiativeDetailPageRoutingModule } from './initiative-detail-routing.module';

import { InitiativeDetailPage } from './initiative-detail.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    InitiativeDetailPageRoutingModule
  ],
  declarations: [InitiativeDetailPage]
})
export class InitiativeDetailPageModule {}
