import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MeetingpopupPageRoutingModule } from './meetingpopup-routing.module';

import { Ionic4DatepickerModule } from '@logisticinfotech/ionic4-datepicker';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MeetingpopupPageRoutingModule,
    Ionic4DatepickerModule
  ],
  declarations: []
})
export class MeetingpopupPageModule {}
