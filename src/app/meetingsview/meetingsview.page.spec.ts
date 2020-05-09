import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MeetingsviewPage } from './meetingsview.page';

describe('MeetingsviewPage', () => {
  let component: MeetingsviewPage;
  let fixture: ComponentFixture<MeetingsviewPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MeetingsviewPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MeetingsviewPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
