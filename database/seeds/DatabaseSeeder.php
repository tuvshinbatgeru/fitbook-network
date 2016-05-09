<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model;
use App\Role;
use App\AwardAccount;
use App\BonusAccount;
use App\CashAccount;
use App\UsageAccount;
use App\SavingAccount;
use App\UserAccountMap;
use App\Block;
use App\UserBlockMap;
use App\GroupRankConfig;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       /* $groupConfig = array(
            ['rankId' => 1, 'groupId' => 1, 'zeroAmount' => 0, 'oneAmount' => 5000, 'twoAmount' => 7000, 'isCapAmount' => 24000, 'capUpperAmount' => 144000 ,'UpperAmount' => 276000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            ['rankId' => 1, 'groupId' => 2, 'zeroAmount' => 14500, 'oneAmount' => 19000, 'twoAmount' => 24000, 'isCapAmount' => 200000, 'capUpperAmount' => 1370000 ,'UpperAmount' => 2800000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            ['rankId' => 1, 'groupId' => 3, 'zeroAmount' => 70000, 'oneAmount' => 135000, 'twoAmount' => 215000, 'isCapAmount' => 2000000, 'capUpperAmount' => 13700000 ,'UpperAmount' => 28000000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            ['rankId' => 2, 'groupId' => 1, 'zeroAmount' => 0, 'oneAmount' => 12000, 'twoAmount' => 19500, 'isCapAmount' => 75000, 'capUpperAmount' => 500000 ,'UpperAmount' => 1000000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            ['rankId' => 2, 'groupId' => 2, 'zeroAmount' => 50000, 'oneAmount' => 75000, 'twoAmount' => 100000, 'isCapAmount' => 750000, 'capUpperAmount' => 5000000 ,'UpperAmount' => 10000000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            ['rankId' => 2, 'groupId' => 3, 'zeroAmount' => 250000, 'oneAmount' => 500000, 'twoAmount' => 750000, 'isCapAmount' => 7500000, 'capUpperAmount' => 15000000 ,'UpperAmount' => 50000000, 'firstLevel' => 1, 'secondLevel' => 2, 'thirdLevel' => 3],
            );

        foreach($groupConfig as $map){
                GroupRankConfig::create($map); 
        }*/
        /*$blockMaps = array(['userId' => 110, 'parentId' => 0, 'blockId' => 1, 'fCount' => 1, 'mCount' => 1, 'rankId' => 1],
            ['userId' => 111, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
            ['userId' => 112, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
            ['userId' => 113, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
            ['userId' => 114, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
            ['userId' => 115, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
            ['userId' => 116, 'parentId' => 0, 'blockId' => 1, 'fCount' => 0, 'mCount' => 0, 'rankId' => 1],
        );

        foreach($blockMaps as $map){
                UserBlockMap::create($map); 
        }*/


        /*$blockA = array(
                'parentId' => 0, 'groupId' => 2, 'userCount' => 0, 'isActive' => 'Y', 'U1' => 150, 'U2' => 151, 'U3' => 152, 'U4' => 153, 'U5' => 154, 'U6' => 155 , 'U7' => 156
            );

        Block::create($blockA);*/
        /*for($i = 0; $i < 200; $i ++)
        {
           $awardAccount = array(
                'id' => $i, 'accountId' => '976', 'nameL' => 'Шагнал', 'nameF' => 'Шагнал', 'endAmount' => 0, 'created_at' => '2016-05-07 00:00:12'
            );

           $bonusAccount = array(
                'id' => $i, 'accountId' => '976', 'nameL' => 'Шагнал', 'nameF' => 'Шагнал', 'endAmount' => 0, 'created_at' => '2016-05-07 00:00:12'
            );

           $cashAccount = array(
                'id' => $i, 'accountId' => '976', 'nameL' => 'Шагнал', 'nameF' => 'Шагнал', 'endAmount' => 0, 'created_at' => '2016-05-07 00:00:12'
            );

           $usageAccount = array(
                'id' => $i, 'accountId' => '976', 'nameL' => 'Шагнал', 'nameF' => 'Шагнал', 'endAmount' => 0, 'created_at' => '2016-05-07 00:00:12'
            );

           $savingAccount = array(
                'id' => $i, 'accountId' => '976', 'nameL' => 'Шагнал', 'nameF' => 'Шагнал', 'endAmount' => 0, 'created_at' => '2016-05-07 00:00:12'
            );

           $maps = array(
                ['userId' => 100 + $i, 'type' => 1,'accountId' => $i,'groupId' => 1],
                ['userId' => 100 + $i, 'type' => 2,'accountId' => $i,'groupId' => 1],
                ['userId' => 100 + $i, 'type' => 3,'accountId' => $i,'groupId' => 1],
                ['userId' => 100 + $i, 'type' => 4,'accountId' => $i,'groupId' => 1],
                ['userId' => 100 + $i, 'type' => 5,'accountId' => $i,'groupId' => 1],
            );

           AwardAccount::create($awardAccount);
           BonusAccount::create($bonusAccount);
           CashAccount::create($cashAccount);
           UsageAccount::create($usageAccount);
           SavingAccount::create($savingAccount);

           foreach($maps as $map){
                UserAccountMap::create($map); 
           }
        }*/

        
           /*$users = array(
                'id' => 100 + $i, 'userId' => 'BB0000' + $i, 'fName' => 'user' + $i,'lName' => 'user','email' => $i+'user@yahoo.com','password' => \Hash::make('123'),'isNetwork' => 'Y'); 

            User::create($users);*/        

        /*$user = User::find('3');
        $admin = Role::find('1');
        $user->attachRole($admin);*/

        // $this->call(UsersTableSeeder::class);
       /*$users = array(
                ['id' => 1, 'userId' => 'AA00001', 'fName' => 'Хулангоо','lName' => 'Амарсанаа','email' => 'hulangoo@yahoo.com','password' => \Hash::make('123'),'isNetwork' => 'Y'],
                ['id' => 2, 'userId' => 'AA00002', 'fName' => 'Tuvshoo','lName' => 'Амарсанаа','email' => 'tuvshoo@yahoo.com','password' => \Hash::make('123'),'isNetwork' => 'Y'],
                ['id' => 3, 'userId' => 'AA00003', 'fName' => 'Puujee','lName' => 'Амарсанаа','email' => 'puujee@yahoo.com','password' => \Hash::make('123'),'isNetwork' => 'Y'],
        );*/
            
        

    }
}
