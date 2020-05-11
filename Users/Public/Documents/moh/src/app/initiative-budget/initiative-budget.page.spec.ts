import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { InitiativeBudgetPage } from './initiative-budget.page';

describe('InitiativeBudgetPage', () => {
  let component: InitiativeBudgetPage;
  let fixture: ComponentFixture<InitiativeBudgetPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InitiativeBudgetPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(InitiativeBudgetPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
