import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { InitiativeDetailPageRoutingModule } from './initiative-detail-routing.module';

import { InitiativeDetailPage } from './initiative-detail.page';
import {ActivitiesModalpopupPage} from '../activities-modalpopup/activities-modalpopup.page';
import {MilestoneModalpopupPage} from '../milestone-modalpopup/milestone-modalpopup.page';
import { InitModelpopupPage} from '../init-modelpopup/init-modelpopup.page';
import { SubinitModalpopupPage} from '../subinit-modalpopup/subinit-modalpopup.page';
import {BudetPopupPage} from '../budet-popup/budet-popup.page';


@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    InitiativeDetailPageRoutingModule,

  ],
  declarations: [InitiativeDetailPage, SubinitModalpopupPage, ActivitiesModalpopupPage, MilestoneModalpopupPage, InitModelpopupPage ,BudetPopupPage],
  entryComponents: [ SubinitModalpopupPage, ActivitiesModalpopupPage, MilestoneModalpopupPage, InitModelpopupPage, BudetPopupPage ]

})
export class InitiativeDetailPageModule {}

