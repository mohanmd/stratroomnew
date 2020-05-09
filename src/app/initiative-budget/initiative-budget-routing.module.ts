import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { InitiativeBudgetPage } from './initiative-budget.page';

const routes: Routes = [
  {
    path: '',
    component: InitiativeBudgetPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class InitiativeBudgetPageRoutingModule {}
