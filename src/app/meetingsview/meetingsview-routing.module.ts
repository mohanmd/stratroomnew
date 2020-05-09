import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MeetingsviewPage } from './meetingsview.page';

const routes: Routes = [
  {
    path: '',
    component: MeetingsviewPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class MeetingsviewPageRoutingModule {}
