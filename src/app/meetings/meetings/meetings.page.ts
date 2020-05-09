import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';

import { MeetingpopupPage } from '../../meetingpopup/meetingpopup.page';
@Component({
  selector: 'app-meetings',
  templateUrl: './meetings.page.html',
  styleUrls: ['./meetings.page.scss'],
})
export class MeetingsPage implements OnInit {

  constructor(private route: Router,  private modalControler: ModalController) { }

  ngOnInit() {
  }

  
  goDetail(){
    this.route.navigate(['view']);
  }  
  goLogin(){
    this.route.navigate(['login']);
  }

    // popup modal
    async presentModal() {
      const modal = await this.modalControler.create({
        component: MeetingpopupPage,
      });
      return await modal.present();
    }
}
