import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MilestoneModalpopupPage } from './milestone-modalpopup.page';

const routes: Routes = [
  {
    path: '',
    component: MilestoneModalpopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class MilestoneModalpopupPageRoutingModule {}
