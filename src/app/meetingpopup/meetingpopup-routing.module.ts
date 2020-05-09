import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MeetingpopupPage } from './meetingpopup.page';

const routes: Routes = [
  {
    path: '',
    component: MeetingpopupPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class MeetingpopupPageRoutingModule {}
