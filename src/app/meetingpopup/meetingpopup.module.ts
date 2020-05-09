import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MeetingpopupPageRoutingModule } from './meetingpopup-routing.module';

import { MeetingpopupPage } from './meetingpopup.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MeetingpopupPageRoutingModule
  ],
  declarations: [MeetingpopupPage]
})
export class MeetingpopupPageModule {}
