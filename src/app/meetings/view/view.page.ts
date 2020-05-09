import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';
import { MeetingeditpopupPage } from '../../meetingeditpopup/meetingeditpopup.page';

@Component({
  selector: 'app-view',
  templateUrl: './view.page.html',
  styleUrls: ['./view.page.scss'],
})
export class ViewPage implements OnInit {
  selectTabs = 'view';
  constructor(private route: Router, public modalController: ModalController) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }
  async editpopup()
  {
    const modal = await this.modalController.create({
      component: MeetingeditpopupPage,
    });
    return await modal.present();
  }
}
