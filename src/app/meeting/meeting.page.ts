import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';
import { NgModule } from '@angular/core';


import {IntiativeModalpopupPage} from '../intiative-modalpopup/intiative-modalpopup.page';
import { MeetingpopupPage } from '../meetingpopup/meetingpopup.page';

@Component({
  selector: 'app-meeting',
  templateUrl: './meeting.page.html',
  styleUrls: ['./meeting.page.scss'],
})
export class MeetingPage implements OnInit {
  public buttonTrue: boolean;

  constructor(private route: Router, private modalControler: ModalController) { }

  ngOnInit() {
  }
  goLogin() {
    this.route.navigate(['login']);
  }

  goDetail(){
    this.route.navigate(['meetingsview']);
  } 


  // popup modal
  async presentModal(value) {
    // alert('1')
    this.buttonTrue = true;

    console.log(value);
    const modal = await this.modalControler.create({
      component: MeetingpopupPage,
      componentProps: {
        data: 'plus',
      }
    });

    return await modal.present();
  }
}
