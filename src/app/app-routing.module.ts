import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';


const routes: Routes = [
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'dashboard',
    loadChildren: () => import('./dashboard/dashboard.module').then( m => m.DashboardPageModule)
  },
  {
    path: 'initiatives',
    loadChildren: () => import('./initiatives/initiatives.module').then( m => m.InitiativesPageModule)
  },
  {
    path: 'initiative-detail',
    loadChildren: () => import('./initiative-detail/initiative-detail.module').then( m => m.InitiativeDetailPageModule)
  },
  {
    path: 'initiative-budget',
    loadChildren: () => import('./initiative-budget/initiative-budget.module').then( m => m.InitiativeBudgetPageModule)
  },
  {
    path: 'intiative-modalpopup',
    loadChildren: () => import('./intiative-modalpopup/intiative-modalpopup.module').then( m => m.IntiativeModalpopupPageModule)
  },
  {
    path: 'activities-modalpopup',
    loadChildren: () => import('./activities-modalpopup/activities-modalpopup.module').then( m => m.ActivitiesModalpopupPageModule)
  },
  {
    path: 'milestone-modalpopup',
    loadChildren: () => import('./milestone-modalpopup/milestone-modalpopup.module').then( m => m.MilestoneModalpopupPageModule)
  },
  {
    path: 'init-modelpopup',
    loadChildren: () => import('./init-modelpopup/init-modelpopup.module').then( m => m.InitModelpopupPageModule)
  },
  {
    path: 'meeting',
    loadChildren: () => import('./meeting/meeting.module').then( m => m.MeetingPageModule)
  },
  {
    path: 'subinit-modalpopup',
    loadChildren: () => import('./subinit-modalpopup/subinit-modalpopup.module').then( m => m.SubinitModalpopupPageModule)
  },
  {
    path: 'budet-popup',
    loadChildren: () => import('./budet-popup/budet-popup.module').then( m => m.BudetPopupPageModule)
  },
  {
    path: 'meetingsview',
    loadChildren: () => import('./meetingsview/meetingsview.module').then( m => m.MeetingsviewPageModule)
  },
  {
    path: 'meetingpopup',
    loadChildren: () => import('./meetingpopup/meetingpopup.module').then( m => m.MeetingpopupPageModule)
  },
  {
    path: 'swot',
    loadChildren: () => import('./swot/swot.module').then( m => m.SwotPageModule)
  },
  {
    path: 'swotdetail',
    loadChildren: () => import('./swotdetail/swotdetail.module').then( m => m.SwotdetailPageModule)
  },

];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
