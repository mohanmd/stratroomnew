import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SwotPage } from './swot.page';

const routes: Routes = [
  {
    path: '',
    component: SwotPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class SwotPageRoutingModule {}
