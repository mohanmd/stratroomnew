import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { BudetPopupPage } from './budet-popup.page';

const routes: Routes = [
  {
    path: '',
    component: BudetPopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class BudetPopupPageRoutingModule {}
