import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MeetingeditpopupPage } from './meetingeditpopup.page';

const routes: Routes = [
  {
    path: '',
    component: MeetingeditpopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class MeetingeditpopupPageRoutingModule {}
