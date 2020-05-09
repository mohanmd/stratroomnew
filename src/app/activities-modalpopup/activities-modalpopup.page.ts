import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';

@Component({
  selector: 'app-activities-modalpopup',
  templateUrl: './activities-modalpopup.page.html',
  styleUrls: ['./activities-modalpopup.page.scss'],
})
export class ActivitiesModalpopupPage implements OnInit {
  @Input() activityeditdata: string;
  @Input() activitydata: string;
  constructor(public modalControler: ModalController) { }

  ngOnInit() {
  }
  dismiss() {
    // using the injected ModalController this page
    // can "dismiss" itself and optionally pass back data
    this.modalControler.dismiss({
      'dismissed': true
    });
  }


}
