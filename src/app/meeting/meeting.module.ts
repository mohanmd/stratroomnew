import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MeetingPageRoutingModule } from './meeting-routing.module';

import { MeetingPage } from './meeting.page';
import { MeetingpopupPage } from '../meetingpopup/meetingpopup.page';



@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MeetingPageRoutingModule
  ],
  declarations: [MeetingPage,MeetingpopupPage],
  entryComponents: [MeetingpopupPage],
})
export class MeetingPageModule {}
