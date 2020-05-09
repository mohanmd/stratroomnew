import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MeetingpopupPage } from './meetingpopup.page';

describe('MeetingpopupPage', () => {
  let component: MeetingpopupPage;
  let fixture: ComponentFixture<MeetingpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MeetingpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MeetingpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
