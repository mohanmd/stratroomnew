import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ViewPageRoutingModule } from './view-routing.module';

import { ViewPage } from './view.page';
import { MeetingeditpopupPage } from '../../meetingeditpopup/meetingeditpopup.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ViewPageRoutingModule
  ],
  declarations: [
    ViewPage, 
    MeetingeditpopupPage
  ],
  entryComponents: [MeetingeditpopupPage],
})
export class ViewPageModule {}
