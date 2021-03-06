import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MeetingsPageRoutingModule } from './meetings-routing.module';

import { MeetingsPage } from './meetings.page';
import { MeetingpopupPage } from '../../meetingpopup/meetingpopup.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MeetingsPageRoutingModule
  ],
  declarations: [MeetingsPage, MeetingpopupPage],
  entryComponents: [ MeetingpopupPage ]
})
export class MeetingsPageModule {}
