import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { InitiativesPage } from './initiatives.page';

const routes: Routes = [
  {
    path: '',
    component: InitiativesPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class InitiativesPageRoutingModule {}
