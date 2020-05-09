import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { InitModelpopupPage } from './init-modelpopup.page';

const routes: Routes = [
  {
    path: '',
    component: InitModelpopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class InitModelpopupPageRoutingModule {}
