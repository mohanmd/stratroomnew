import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SubinitModalpopupPage } from './subinit-modalpopup.page';

const routes: Routes = [
  {
    path: '',
    component: SubinitModalpopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class SubinitModalpopupPageRoutingModule {}
