import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MeetingsviewPageRoutingModule } from './meetingsview-routing.module';

import { MeetingsviewPage } from './meetingsview.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MeetingsviewPageRoutingModule
  ],
  declarations: [MeetingsviewPage]
})
export class MeetingsviewPageModule {}
