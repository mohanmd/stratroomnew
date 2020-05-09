import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import {IntiativeModalpopupPage} from '../intiative-modalpopup/intiative-modalpopup.page';
import { ModalController } from '@ionic/angular';
import { ActivitiesModalpopupPage} from '../activities-modalpopup/activities-modalpopup.page';
import {MilestoneModalpopupPage} from '../milestone-modalpopup/milestone-modalpopup.page';
import {InitModelpopupPage} from '../init-modelpopup/init-modelpopup.page';
import {SubinitModalpopupPage} from '../subinit-modalpopup/subinit-modalpopup.page';
import {BudetPopupPage} from '../budet-popup/budet-popup.page';


@Component({
  selector: 'app-initiative-detail',
  templateUrl: './initiative-detail.page.html',
  styleUrls: ['./initiative-detail.page.scss'],
})
export class InitiativeDetailPage implements OnInit {

  selectTabs = 'budget1';
  constructor(private route: Router, public modalControler: ModalController ) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['initiatives']);
  }
  goBudget(){
    this.route.navigate(['initiative-budget']);
  }
  // popup modal
  async presentModal(value) {
    // alert('3')

    const modal = await this.modalControler.create({
      component: SubinitModalpopupPage,
      componentProps: {
        data: 'plus',
      }
    });
    return await modal.present();
  }
  async editModal(value) {
    const modal = await this.modalControler.create({
      component: SubinitModalpopupPage,
      componentProps: {
        data1: 'edit',
      }
    });
    return await modal.present();
  }
  async activityeditModal(value) {
    const modal = await this.modalControler.create({
      component: ActivitiesModalpopupPage,
      componentProps: {
        activityeditdata: 'edit',
      }
    });
    return await modal.present();
  }
  async milestoneModal(value) {
    // alert('1')
    const modal = await this.modalControler.create({
      component: MilestoneModalpopupPage,
      componentProps: {
        milestonedata: 'plusmiles',
      }
    });
    return await modal.present();
  }async activityModal(value) {
    // alert('2')

    const modal = await this.modalControler.create({
      component: ActivitiesModalpopupPage,
      componentProps: {
        activitydata: 'plusactivity',
      }
    });
    return await modal.present();
  }
  async initiativemodal(value) {
    // alert('2')

    const modal = await this.modalControler.create({
      component: InitModelpopupPage,
      componentProps: {
        iniativedata: 'editinit',
      }
    });
    return await modal.present();
  } async mileseditModal(value) {
    // alert('2')

    const modal = await this.modalControler.create({
      component: InitModelpopupPage,
      componentProps: {
        milesdata: 'edit',
      }
    });
    return await modal.present();
  }async editBudget(value) {
    // alert('2')

    const modal = await this.modalControler.create({
      component: BudetPopupPage,
      componentProps: {
        budgetdata: 'editbudget',
      }
    });
    return await modal.present();
  }
}

