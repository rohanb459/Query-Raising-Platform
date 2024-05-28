<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '098cd434ff4a4365e3dad6a7f235c679a79cb49691eff30e4209363720f333f5305881ca1f4042cb',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 04:52:52',
                'updated_at' => '2024-05-13 04:52:52',
                'expires_at' => '2025-05-13 04:52:52',
            ),
            1 => 
            array (
                'id' => '0d04980ff5d067ee95cfa7e941e59bc0d6cea066d404ed06b44193fe3369c7bf33c6a8798f7bdfa6',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:53:37',
                'updated_at' => '2024-03-07 04:53:37',
                'expires_at' => '2025-03-07 04:53:37',
            ),
            2 => 
            array (
                'id' => '1229bf1e6e111cf37de5969fb937afdc94d3f71421719fa2f30844d7123b4fc56a53997214d91205',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-10 11:23:02',
                'updated_at' => '2024-05-10 11:23:03',
                'expires_at' => '2025-05-10 11:23:02',
            ),
            3 => 
            array (
                'id' => '14c0a5f37ad6f2021095056acc515edbc5579cc44be4e74af0cc1726160974f4b0d80345849b7b43',
                'user_id' => 5,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-05 10:59:12',
                'updated_at' => '2024-03-05 10:59:13',
                'expires_at' => '2025-03-05 10:59:12',
            ),
            4 => 
            array (
                'id' => '14d57bccd3390820f93fa2e543873e697e6c3a329d3e963859931dfcdbf019b58e24aedbda7b0581',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-15 04:19:40',
                'updated_at' => '2024-03-15 04:19:40',
                'expires_at' => '2025-03-15 04:19:40',
            ),
            5 => 
            array (
                'id' => '16ad11a022da9a8bfe1f3296dedbeed9648c2b4fabcaff76772a3ecadf735056966bf6f468707e8b',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-28 05:11:10',
                'updated_at' => '2024-03-28 05:11:10',
                'expires_at' => '2025-03-28 05:11:10',
            ),
            6 => 
            array (
                'id' => '1879faeb4ba0c382c334604374f32230ddc6611afc0ca8aa7499185eba1971fdcf111eb8ba520222',
                'user_id' => 17,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 09:20:55',
                'updated_at' => '2024-04-01 09:20:55',
                'expires_at' => '2025-04-01 09:20:55',
            ),
            7 => 
            array (
                'id' => '1dd7abf48457f7a38bc659e252e490e9a054ad520ae474f7e23455567385c5f55d3d85bc62a4ad5c',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-28 05:18:27',
                'updated_at' => '2024-03-28 05:18:27',
                'expires_at' => '2025-03-28 05:18:27',
            ),
            8 => 
            array (
                'id' => '244db8150c8613b1a435d43237babdc52b1ef80c77bc7ee853ca1c050131eefb4af9220722a5e623',
                'user_id' => 18,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 11:42:27',
                'updated_at' => '2024-04-01 11:42:27',
                'expires_at' => '2025-04-01 11:42:27',
            ),
            9 => 
            array (
                'id' => '263d55f8f3773e1b285beff88d1cf8d60756cb8ec13b10a783528e79f619c34991e16539532338f1',
                'user_id' => 22,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:57:49',
                'updated_at' => '2024-04-01 12:57:49',
                'expires_at' => '2025-04-01 12:57:49',
            ),
            10 => 
            array (
                'id' => '2d77e4424511fc74f158bcd6dafd1e6a00a94d63e6feab1a1eb9f999fdacd840bbb0b514e62e1d92',
                'user_id' => 20,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:42:19',
                'updated_at' => '2024-04-01 12:42:19',
                'expires_at' => '2025-04-01 12:42:19',
            ),
            11 => 
            array (
                'id' => '3026aa696f51b9708fd9d8b8a2792b0de5bfdf3600525d4165a0aa67fb753af7ced437f97bbe2c6c',
                'user_id' => 24,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 05:00:36',
                'updated_at' => '2024-05-13 05:00:36',
                'expires_at' => '2025-05-13 05:00:36',
            ),
            12 => 
            array (
                'id' => '3433ed4db3f3f4a06da6a61172ac6c7f2a08eba68e3112b957d2a79d87d65912c93615488891c473',
                'user_id' => 14,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:36:20',
                'updated_at' => '2024-04-01 07:36:20',
                'expires_at' => '2025-04-01 07:36:20',
            ),
            13 => 
            array (
                'id' => '36fc0b02d60d2153c54a930199e677d91dee463a253876b46d15f49ab69359e81e679b782e9b2d8b',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:29:46',
                'updated_at' => '2024-04-01 07:29:46',
                'expires_at' => '2025-04-01 07:29:46',
            ),
            14 => 
            array (
                'id' => '3d70011f0ca24b96049bff8f09c93ca86b7830e699488dbdeab1933e6a29d1dc6fa036b6bd9cd3ff',
                'user_id' => 17,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 10:18:07',
                'updated_at' => '2024-04-01 10:18:07',
                'expires_at' => '2025-04-01 10:18:07',
            ),
            15 => 
            array (
                'id' => '3e8a59109a7c241af436a70d134571ac55100660c050cab552fb365bc86dd6269a1d3e1fc65df132',
                'user_id' => 19,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 11:58:24',
                'updated_at' => '2024-05-13 11:58:24',
                'expires_at' => '2025-05-13 11:58:24',
            ),
            16 => 
            array (
                'id' => '413c9a1a30bf8084018eed2ce12af0a9fe613bf9ded6fc06e2dd00d3782947f8b2bc79938ad6192a',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 05:53:39',
                'updated_at' => '2024-05-13 05:53:39',
                'expires_at' => '2025-05-13 05:53:39',
            ),
            17 => 
            array (
                'id' => '47b0ef212e31a479c88ed5b51ec4c8099387f9a4c5edd88bd719f3029e00f4bfcfead9e02d5d5ef6',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-26 04:16:22',
                'updated_at' => '2024-03-26 04:16:23',
                'expires_at' => '2025-03-26 04:16:22',
            ),
            18 => 
            array (
                'id' => '4dba6f0d75ea1911316c7cb91c0e41da57b79b94b0279cbf600b3de564c74ade84b0f37d8c1bebd5',
                'user_id' => 7,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-06 10:49:49',
                'updated_at' => '2024-03-06 10:49:49',
                'expires_at' => '2025-03-06 10:49:49',
            ),
            19 => 
            array (
                'id' => '51751347ab97258e1f61cea72318df2919c6f22b53a397549f810fa73835bbcb1cf58fcac894f43e',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 11:55:43',
                'updated_at' => '2024-05-13 11:55:43',
                'expires_at' => '2025-05-13 11:55:43',
            ),
            20 => 
            array (
                'id' => '526c22861564d68cbdd6f9ece3b16e406b386b51c2ca0a18a9338a3e6fa2ef5376d93b5241df5b82',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 11:57:10',
                'updated_at' => '2024-05-13 11:57:10',
                'expires_at' => '2025-05-13 11:57:10',
            ),
            21 => 
            array (
                'id' => '54445364262bea28fef6da9e140681f03473a828cd13e3eb8cdae217f780277b31608156558e430b',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 12:00:27',
                'updated_at' => '2024-05-13 12:00:27',
                'expires_at' => '2025-05-13 12:00:27',
            ),
            22 => 
            array (
                'id' => '55d0a0cfaa31593f1a7d4a63eea039c715d940eb115070749a28bdc28c6eb131988f5e35780afb4b',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 05:11:57',
                'updated_at' => '2024-05-13 05:11:57',
                'expires_at' => '2025-05-13 05:11:57',
            ),
            23 => 
            array (
                'id' => '5659f11e44fed42cee8b2f07b126a472392b6e6cd25620b7931974bd80c6b0bda5d2406102b0b4b5',
                'user_id' => 19,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:39:12',
                'updated_at' => '2024-04-01 12:39:12',
                'expires_at' => '2025-04-01 12:39:12',
            ),
            24 => 
            array (
                'id' => '5a8359b43979d0e7031af19dd83327db492797b56d5cfa61152f99dd2e3e231c025151f1e4bb2f54',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-09 11:57:03',
                'updated_at' => '2024-05-09 11:57:03',
                'expires_at' => '2025-05-09 11:57:03',
            ),
            25 => 
            array (
                'id' => '5c4173948f5a2171a11011ec8f2f351e7773f85829e7ef4316e22e4e230b0fe510a6d0e5caae4b21',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:52:28',
                'updated_at' => '2024-03-07 04:52:28',
                'expires_at' => '2025-03-07 04:52:28',
            ),
            26 => 
            array (
                'id' => '5e3a128e6fb6875db927777be08c1512fb6bef1390836777f7f27537b7a0a41708cc658dd0bcdfac',
                'user_id' => 17,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 10:17:15',
                'updated_at' => '2024-04-01 10:17:15',
                'expires_at' => '2025-04-01 10:17:15',
            ),
            27 => 
            array (
                'id' => '5ef4368dffde3ee4c2b13f778f38d38385ad32e294ba12dfeac35b9389832d2834f42ccc81b13332',
                'user_id' => 21,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:56:46',
                'updated_at' => '2024-04-01 12:56:46',
                'expires_at' => '2025-04-01 12:56:46',
            ),
            28 => 
            array (
                'id' => '60d3312b8912bf042b7ceb95ce8ffafe4a9cf50ccf3863fd20058cb0380aa62ed649dc89d2a83bb6',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-28 04:32:17',
                'updated_at' => '2024-03-28 04:32:18',
                'expires_at' => '2025-03-28 04:32:17',
            ),
            29 => 
            array (
                'id' => '652ce3c8a1f0809b7490065f5558552290f201a3d816982dde11974ce4eb7cd8da3dfdabbe264163',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-28 07:03:13',
                'updated_at' => '2024-03-28 07:03:14',
                'expires_at' => '2025-03-28 07:03:13',
            ),
            30 => 
            array (
                'id' => '68cbe6e40666eb42966271879dd246e49a26ba17ab12aefd2d8d0f97e16bcfb05d444706d3252851',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-02-28 09:14:29',
                'updated_at' => '2024-02-28 09:14:30',
                'expires_at' => '2025-02-28 09:14:29',
            ),
            31 => 
            array (
                'id' => '6bee0fd144243a42bdc2f377b1e7ece8fcb9ec338e194ee1faf1503419f1c0fdc90465d48567b96f',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-28 09:23:39',
                'updated_at' => '2024-05-28 09:23:40',
                'expires_at' => '2025-05-28 09:23:39',
            ),
            32 => 
            array (
                'id' => '6d30daa2f893ddbd8e5f646f72f0b647bad58bcac575866513bdb2d3284359f4bfd3e9868f15950f',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-14 09:09:59',
                'updated_at' => '2024-05-14 09:09:59',
                'expires_at' => '2025-05-14 09:09:59',
            ),
            33 => 
            array (
                'id' => '7114ce0171cee0c4cbe23f06990da4e9d1d51c21fa60013c662e74520ad53385b9dbf728c186b1ed',
                'user_id' => 5,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-02-29 04:02:44',
                'updated_at' => '2024-02-29 04:02:45',
                'expires_at' => '2025-03-01 04:02:44',
            ),
            34 => 
            array (
                'id' => '724df16df4f1a8232326d811293909da0ccd452c0a87c41cf2401a49ac87eff23451fb368f4ed145',
                'user_id' => 20,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:43:05',
                'updated_at' => '2024-04-01 12:43:05',
                'expires_at' => '2025-04-01 12:43:05',
            ),
            35 => 
            array (
                'id' => '805d79f56e0e4ab800c8ae1869bb2f62018964646dca328e69bda426142d374f01de74e9b6a67131',
                'user_id' => 13,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:35:47',
                'updated_at' => '2024-04-01 07:35:47',
                'expires_at' => '2025-04-01 07:35:47',
            ),
            36 => 
            array (
                'id' => '81233d1336478ad1f34b97a57b57ba0e516d03ad0a7654331a9ca5e17e3e041a033ef70b2c941bc0',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-14 04:11:22',
                'updated_at' => '2024-05-14 04:11:23',
                'expires_at' => '2025-05-14 04:11:22',
            ),
            37 => 
            array (
                'id' => '888b64fe86aaf0934de7bc22985a68358aaaf51565e244a83cf1ca50ca7574ce69370be069ad5b3b',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:55:24',
                'updated_at' => '2024-03-07 04:55:24',
                'expires_at' => '2025-03-07 04:55:24',
            ),
            38 => 
            array (
                'id' => '98722b95cee3b427d3c4098875d8ca1a082f23cd0e77efae67f19596fda9bcf8faa86b6e4ba1eca3',
                'user_id' => 19,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-09 11:58:34',
                'updated_at' => '2024-05-09 11:58:34',
                'expires_at' => '2025-05-09 11:58:34',
            ),
            39 => 
            array (
                'id' => '9acea3ea616c9e529ea1746b94178af14d87cf84738f9fa2b515095eb4859f5cd07abd3e6fbfb357',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-09 11:53:19',
                'updated_at' => '2024-05-09 11:53:20',
                'expires_at' => '2025-05-09 11:53:19',
            ),
            40 => 
            array (
                'id' => '9c7042ae1ddf6510342f5097fa49dc0cda134cf9f3afbbe8c51a1428da504e17e524b5297e0f7f96',
                'user_id' => 16,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:39:08',
                'updated_at' => '2024-04-01 07:39:08',
                'expires_at' => '2025-04-01 07:39:08',
            ),
            41 => 
            array (
                'id' => '9e5dbec7895c6263928641b70d70115ce9fc17fd92901a52000c61fb109c063ba4639258f2bdef6c',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:52:10',
                'updated_at' => '2024-03-07 04:52:10',
                'expires_at' => '2025-03-07 04:52:10',
            ),
            42 => 
            array (
                'id' => 'a8abf0cd09a61679e20c7036771ed4d79a3d2f1542e6d64f1de8cddab22446a16152379d05c8f6f7',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:56:55',
                'updated_at' => '2024-03-07 04:56:55',
                'expires_at' => '2025-03-07 04:56:55',
            ),
            43 => 
            array (
                'id' => 'aa8d9779dc8db08da1354b49c2b3864d357251d943d4ecc0deeb9623d96670567c0ef8a98a8a6bb5',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-18 04:21:25',
                'updated_at' => '2024-03-18 04:21:26',
                'expires_at' => '2025-03-18 04:21:25',
            ),
            44 => 
            array (
                'id' => 'ac580f936562087136d8a48e147a4e221a416b499692765a9c32fc418a6f18965b1ae199f9a94307',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-27 12:40:51',
                'updated_at' => '2024-03-27 12:40:51',
                'expires_at' => '2025-03-27 12:40:51',
            ),
            45 => 
            array (
                'id' => 'aed295db09fac660990cd9a6cd3f510481763cbae435f4456186e018bff99dc8fc702d52cae8d30d',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-27 06:38:49',
                'updated_at' => '2024-03-27 06:38:49',
                'expires_at' => '2025-03-27 06:38:49',
            ),
            46 => 
            array (
                'id' => 'b21d09e520f78d8a612a56a7439198be116561fbc47c392c8acca06ca6f6950ba703ce3b84fcdb80',
                'user_id' => 18,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:41:03',
                'updated_at' => '2024-04-01 12:41:03',
                'expires_at' => '2025-04-01 12:41:03',
            ),
            47 => 
            array (
                'id' => 'be18a63133118075856ee7da131035172b80aae9fa1d5883ec1ae266f55812f51769ee9088240c5a',
                'user_id' => 15,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:38:13',
                'updated_at' => '2024-04-01 07:38:13',
                'expires_at' => '2025-04-01 07:38:13',
            ),
            48 => 
            array (
                'id' => 'beea5f0a2c63e7d578409ad605a384e162cb22d26a75eae5831a684a816d8f7d1445baa0aea58782',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 05:17:43',
                'updated_at' => '2024-03-07 05:17:43',
                'expires_at' => '2025-03-07 05:17:43',
            ),
            49 => 
            array (
                'id' => 'bf0cb6394a0474dd93d329e0649826828a33afe0dda9b0adc590fecca34bb81b5c57cbbf19f364d7',
                'user_id' => 17,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 09:19:31',
                'updated_at' => '2024-04-01 09:19:31',
                'expires_at' => '2025-04-01 09:19:31',
            ),
            50 => 
            array (
                'id' => 'bf23a4fbe1d7e544487c99d19715892782af05bc454f289b5f3dce841bc63f4638ac4e13c527a5a8',
                'user_id' => 19,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:35:23',
                'updated_at' => '2024-04-01 12:35:23',
                'expires_at' => '2025-04-01 12:35:23',
            ),
            51 => 
            array (
                'id' => 'c5a2c2fd22e55f1d738d1b889775c6e4215b75fb13453f2c323682302f3bf36c9142fc6e2f50829e',
                'user_id' => 19,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:34:40',
                'updated_at' => '2024-04-01 12:34:40',
                'expires_at' => '2025-04-01 12:34:40',
            ),
            52 => 
            array (
                'id' => 'cd58d5a6a63e684f16524734cb7cdbd098268064058dcd4b620975e7247b4844df260fcb8b85b57e',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 04:29:39',
                'updated_at' => '2024-04-01 04:29:39',
                'expires_at' => '2025-04-01 04:29:39',
            ),
            53 => 
            array (
                'id' => 'cf54648da038ec5974659cedee445a02641a36734279723b201b028faade879760a1e0473dbc2212',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-15 09:59:42',
                'updated_at' => '2024-03-15 09:59:42',
                'expires_at' => '2025-03-15 09:59:42',
            ),
            54 => 
            array (
                'id' => 'd132bfd942e519c8d07ea60c593fc411a14f5b92b346fa9abe6c8db0ec908688efd11fd4f29fac3c',
                'user_id' => 18,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 11:43:40',
                'updated_at' => '2024-04-01 11:43:40',
                'expires_at' => '2025-04-01 11:43:40',
            ),
            55 => 
            array (
                'id' => 'd53449a3976343b8b079f62bae371419751eaee66bd7ff458def12e5c4896d4f74d971dcfc0cc0a4',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-15 09:33:46',
                'updated_at' => '2024-03-15 09:33:47',
                'expires_at' => '2025-03-15 09:33:46',
            ),
            56 => 
            array (
                'id' => 'd6b0f2e75d893645edaac47b77195aae119afec506703824d5c935d1c40247536cbefbf2ef3a19ef',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-09 12:14:05',
                'updated_at' => '2024-05-09 12:14:05',
                'expires_at' => '2025-05-09 12:14:05',
            ),
            57 => 
            array (
                'id' => 'd84d090959d0268cbc8b79e06c0988a434f9b31dd6a587cb990e79af2b90333b88ca04b9f0a5d58a',
                'user_id' => 24,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 05:05:46',
                'updated_at' => '2024-05-13 05:05:46',
                'expires_at' => '2025-05-13 05:05:46',
            ),
            58 => 
            array (
                'id' => 'd906031511ae0c1af510409af0426970c68d29547a031b00857686c44e0cbd578b8c4f7f092b0ef9',
                'user_id' => 3,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-02-28 09:15:50',
                'updated_at' => '2024-02-28 09:15:50',
                'expires_at' => '2025-02-28 09:15:50',
            ),
            59 => 
            array (
                'id' => 'd9b51ff7e77a9e71c4998ad6693fcad76d304a61cb28ac17a6465ee0efa85fab893252e8a5a7acd7',
                'user_id' => 12,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:33:38',
                'updated_at' => '2024-04-01 07:33:38',
                'expires_at' => '2025-04-01 07:33:38',
            ),
            60 => 
            array (
                'id' => 'daf926a4027e65e55eadb0f4d9f88fbfbcf3c34331000b90340e481fc3ef54302bd76aabf5177bb3',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 05:27:31',
                'updated_at' => '2024-03-07 05:27:31',
                'expires_at' => '2025-03-07 05:27:31',
            ),
            61 => 
            array (
                'id' => 'dc310f75d693d6d872a4b9bef30fc9f2ba293f5e04b5875ca9aab4e7bda6c4f6e53eebd22f51f69c',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-09 12:12:09',
                'updated_at' => '2024-05-09 12:12:09',
                'expires_at' => '2025-05-09 12:12:09',
            ),
            62 => 
            array (
                'id' => 'e0d91d40883cf13ee02947a0277956a6651b444c5693d8bd8dff2f9fc0ded457721652b601fbcc12',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-26 09:59:09',
                'updated_at' => '2024-03-26 09:59:09',
                'expires_at' => '2025-03-26 09:59:09',
            ),
            63 => 
            array (
                'id' => 'e0ec33ed33d8939bed138047eac0ef871b98b8059e527ccc40daaf1a169f81a03a35777428dcb805',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 04:52:00',
                'updated_at' => '2024-05-13 04:52:01',
                'expires_at' => '2025-05-13 04:52:00',
            ),
            64 => 
            array (
                'id' => 'e45d32ca4befc07a2b8ff6beb3e5bfe57b49ef19e5f0d5ca52b1887f5cbb084906ded0ff99d8d4af',
                'user_id' => 21,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:56:11',
                'updated_at' => '2024-04-01 12:56:11',
                'expires_at' => '2025-04-01 12:56:11',
            ),
            65 => 
            array (
                'id' => 'e4773a67117b0b69aaf187633c560e846b0653e12e83f2c3dfc1ca708002abc66e456980aca926c5',
                'user_id' => 11,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 07:31:15',
                'updated_at' => '2024-04-01 07:31:15',
                'expires_at' => '2025-04-01 07:31:15',
            ),
            66 => 
            array (
                'id' => 'e52544f3519544456cb3a74cfa2c1da3a7aba7bbcc52d4c56bc4d1d6ffc00f0a20e8cb5fc592a98f',
                'user_id' => 23,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-05-13 05:14:47',
                'updated_at' => '2024-05-13 05:14:47',
                'expires_at' => '2025-05-13 05:14:47',
            ),
            67 => 
            array (
                'id' => 'e57fe66e88c7304fcd84a76c64ea81d2640c7c4e582d1780be2b7b6707619256403d8027abe60a83',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 03:56:35',
                'updated_at' => '2024-04-01 03:56:36',
                'expires_at' => '2025-04-01 03:56:35',
            ),
            68 => 
            array (
                'id' => 'e6fb9b10c150a157fd604e92e1d95071c75e349c53d36a6cf3870ea73fb06ea3a9f8e0546bfd8cb5',
                'user_id' => 5,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-02-28 09:21:27',
                'updated_at' => '2024-02-28 09:21:27',
                'expires_at' => '2025-02-28 09:21:27',
            ),
            69 => 
            array (
                'id' => 'f1841f3997949aa79f41a9dca01d664be00e866b44d0d30692816bdf624b8d04dc6424cd4a1bb936',
                'user_id' => 17,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 10:30:49',
                'updated_at' => '2024-04-01 10:30:49',
                'expires_at' => '2025-04-01 10:30:49',
            ),
            70 => 
            array (
                'id' => 'f20362059a19216085c1faa68123171461117f06880c73dbf81deaec98e4a96b1671380b2b490dab',
                'user_id' => 20,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-04-01 12:41:42',
                'updated_at' => '2024-04-01 12:41:42',
                'expires_at' => '2025-04-01 12:41:42',
            ),
            71 => 
            array (
                'id' => 'f242cff2276ab9175f47ec838a281eae59f16a56f4a2640c96c0e212115c0985831585b023640fa5',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 04:54:52',
                'updated_at' => '2024-03-07 04:54:52',
                'expires_at' => '2025-03-07 04:54:52',
            ),
            72 => 
            array (
                'id' => 'f25ab108922b0a364d0a60be00fd168f886b67b09e10e545e62285f409e348de8ce5fbe9c9767e5c',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 05:28:01',
                'updated_at' => '2024-03-07 05:28:01',
                'expires_at' => '2025-03-07 05:28:01',
            ),
            73 => 
            array (
                'id' => 'f335c66729ba1d999f0a7b5f8f97e9721f43db26e41d2edf6c4a93c1c3bdbfcdf35d74a5164f6f1b',
                'user_id' => 10,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-15 04:24:24',
                'updated_at' => '2024-03-15 04:24:24',
                'expires_at' => '2025-03-15 04:24:24',
            ),
            74 => 
            array (
                'id' => 'f6f4fe7caacdd3245b66788811ba6e0d762ca1188b860db5292ea446145e64ef4ddba9a64b09b128',
                'user_id' => 6,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-05 11:02:53',
                'updated_at' => '2024-03-05 11:02:53',
                'expires_at' => '2025-03-05 11:02:53',
            ),
            75 => 
            array (
                'id' => 'f9d2c37ac20eca69545d842af515a951c2b6627eaee89a4714f09abdb7d95443cb91a7526010e129',
                'user_id' => 7,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-06 10:48:49',
                'updated_at' => '2024-03-06 10:48:49',
                'expires_at' => '2025-03-06 10:48:49',
            ),
            76 => 
            array (
                'id' => 'fcd10d1fde642c0cd1591ce0f1eec72abfd032e18e2b6d28b267628fee37f57aedbc16e067129ed9',
                'user_id' => 5,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-02-28 09:17:56',
                'updated_at' => '2024-02-28 09:17:56',
                'expires_at' => '2025-02-28 09:17:56',
            ),
            77 => 
            array (
                'id' => 'fdf73c62458e3f4292a5265bb65f09e3795f0c27912063a8cb36a85312ea98ba3d4c68ce8bc01526',
                'user_id' => 9,
                'client_id' => 1,
                'name' => 'token',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2024-03-07 05:32:47',
                'updated_at' => '2024-03-07 05:32:47',
                'expires_at' => '2025-03-07 05:32:47',
            ),
        ));
        
        
    }
}