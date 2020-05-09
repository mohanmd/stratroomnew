import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { InitiativeBudgetPageRoutingModule } from './initiative-budget-routing.module';

import { InitiativeBudgetPage } from './initiative-budget.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    InitiativeBudgetPageRoutingModule
  ],
  declarations: [InitiativeBudgetPage]
})
export class InitiativeBudgetPageModule {}
