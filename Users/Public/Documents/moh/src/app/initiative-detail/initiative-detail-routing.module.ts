import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { InitiativeDetailPage } from './initiative-detail.page';

const routes: Routes = [
  {
    path: '',
    component: InitiativeDetailPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class InitiativeDetailPageRoutingModule {}
