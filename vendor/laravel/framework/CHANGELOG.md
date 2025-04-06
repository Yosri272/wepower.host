<<<<<<< HEAD
# Release Notes for 10.x

## [Unreleased](https://github.com/laravel/framework/compare/v10.48.15...10.x)

## [v10.48.15](https://github.com/laravel/framework/compare/v10.48.14...v10.48.15) - 2024-07-02

* [10.x] Set previous exception on `HttpResponseException` by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51986

## [v10.48.14](https://github.com/laravel/framework/compare/v10.48.13...v10.48.14) - 2024-06-21

* [10.x] Fixes unable to call another command as a initialized instance of `Command` class by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51824
* [10.x] fix handle `shift()` on an empty collection by [@Treggats](https://github.com/Treggats) in https://github.com/laravel/framework/pull/51841
* [10.x] Ensure`schema:dump` will dump the migrations table only if it exists by [@NickSdot](https://github.com/NickSdot) in https://github.com/laravel/framework/pull/51827

## [v10.48.13](https://github.com/laravel/framework/compare/v10.48.12...v10.48.13) - 2024-06-18
=======
# Release Notes for 11.x

## [Unreleased](https://github.com/laravel/framework/compare/v11.44.0...11.x)

## [v11.44.0](https://github.com/laravel/framework/compare/v11.43.2...v11.44.0) - 2025-02-24

* [11.x] Fix parsing `PHP_CLI_SERVER_WORKERS` as `string` instead of `int` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54724
* [11.x] Rename Redis parse connection for cluster test method to follow naming conventions by [@jackbayliss](https://github.com/jackbayliss) in https://github.com/laravel/framework/pull/54721
* [11.x] Allow `readAt` method to use in database channel by [@utsavsomaiya](https://github.com/utsavsomaiya) in https://github.com/laravel/framework/pull/54729
* [11.x] Fix: Custom Exceptions with Multiple Arguments does not properly rein… by [@pandiselvamm](https://github.com/pandiselvamm) in https://github.com/laravel/framework/pull/54705
* [11.x] Update ConcurrencyTest exception reference to use namespace by [@jackbayliss](https://github.com/jackbayliss) in https://github.com/laravel/framework/pull/54732
* [11.x] Deprecate `Factory::$modelNameResolver` by [@samlev](https://github.com/samlev) in https://github.com/laravel/framework/pull/54736
* [11x.] Improved typehints for `InteractsWithDatabase` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54748
* [11.x] Improved typehints for `InteractsWithExceptionHandling` && `ExceptionHandlerFake` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54747

## [v11.43.2](https://github.com/laravel/framework/compare/v11.43.1...v11.43.2) - 2025-02-19

* [11.x] Add missing test for `implode()` by [@nuernbergerA](https://github.com/nuernbergerA) in https://github.com/laravel/framework/pull/54704
* [11.x] Enhance eventStream to Support Custom Events and Start Messages by [@devhammed](https://github.com/devhammed) in https://github.com/laravel/framework/pull/54695
* Revert "[11.x] Enhance eventStream to Support Custom Events and Start Messages" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/54714
* [11.x] Replace MD5 with xxh128 in File::hasSameHash() by [@vlakoff](https://github.com/vlakoff) in https://github.com/laravel/framework/pull/54690
* [11.x] Add parameter typing for closure to addGlobalScope method by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/54677
* [11.x] `assertOnlyJsonValidationErrors` / `assertOnlyInvalid` by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/54678
* [11.x] Allow for assertions against `QueueFake::pushRaw()` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54703
* [11.x] Fix: Handles non nested explode of multiple Date and Numeric rules in ValidationRuleParser by [@AlexandreMeledandri](https://github.com/AlexandreMeledandri) in https://github.com/laravel/framework/pull/54718

## [v11.43.1](https://github.com/laravel/framework/compare/v11.43.0...v11.43.1) - 2025-02-19

* [11.x] Fix "Divide by Zero" regression bug introduced in #54650 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54685
* Revert "Fix Collection::implode with \Stringable objects" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54691

## [v11.43.0](https://github.com/laravel/framework/compare/v11.42.1...v11.43.0) - 2025-02-18

* Remove Incorrect [@mixin](https://github.com/mixin) Annotation in BuildsQueries Trait by [@daniel-de-wit](https://github.com/daniel-de-wit) in https://github.com/laravel/framework/pull/54596
* make withoutScopedBindings usable on RouteRegistrar by [@ssninnni](https://github.com/ssninnni) in https://github.com/laravel/framework/pull/54592
* [11.x] Update Broadcasting Install Command For Bun Version 1.1.39^ by [@realpoke](https://github.com/realpoke) in https://github.com/laravel/framework/pull/54605
* [11.x] Add isTtySupported to Process facade by [@Riley19280](https://github.com/Riley19280) in https://github.com/laravel/framework/pull/54604
* [11.x] fix: pagination generics by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/54601
* Convert closures to arrow functions in the Model class by [@alikhosravidev](https://github.com/alikhosravidev) in https://github.com/laravel/framework/pull/54599
* [11.x] Document hashedValue as non-nullable by [@JurianArie](https://github.com/JurianArie) in https://github.com/laravel/framework/pull/54615
* [11.x] Prohibited If Declined and Prohibited If Accepted validation rules  by [@osama-98](https://github.com/osama-98) in https://github.com/laravel/framework/pull/54608
* [11.x] Fix param types for `orWhereHasMorph` method by [@simonellensohn](https://github.com/simonellensohn) in https://github.com/laravel/framework/pull/54659
* [11.x] Add pascal alias for studly string helper by [@da-mask](https://github.com/da-mask) in https://github.com/laravel/framework/pull/54655
* [11.x] make the Eloquent missing attribute handler more accurate by changing offsetExists by [@koenvu](https://github.com/koenvu) in https://github.com/laravel/framework/pull/54654
* [11.x] use exec function if the symlink function is unavailable by [@aisuvro](https://github.com/aisuvro) in https://github.com/laravel/framework/pull/54651
* [11.x] use value helper for $perPage as used for $total by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/54650
* [11.x] [cleanup] used illuminate str contains by [@daison12006013](https://github.com/daison12006013) in https://github.com/laravel/framework/pull/54647
* [11.x] Allow can attribute on group by [@utsavsomaiya](https://github.com/utsavsomaiya) in https://github.com/laravel/framework/pull/54648
* Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54645
* Fixes Factory Using Wrong Model Name by [@SameOldNick](https://github.com/SameOldNick) in https://github.com/laravel/framework/pull/54644
* [11.x] fix 'parsePipeString' in pipeline helper by [@igzard](https://github.com/igzard) in https://github.com/laravel/framework/pull/54643
* Update old() docblock by [@AJenbo](https://github.com/AJenbo) in https://github.com/laravel/framework/pull/54641
* [11.x] Feature: Array reject by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/54638
* [11.x] Blade [@include](https://github.com/include) performance by [@AlliBalliBaba](https://github.com/AlliBalliBaba) in https://github.com/laravel/framework/pull/54633
* Fix Collection::implode with \Stringable objects by [@timkelty](https://github.com/timkelty) in https://github.com/laravel/framework/pull/54630
* [11.x] Fix `serve` command with `PHP_CLI_SERVER_WORKERS` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54606
* [11.x] new: `ddJson` method on `TestResponse` class by [@chester-sykes](https://github.com/chester-sykes) in https://github.com/laravel/framework/pull/54673
* [11.x] Add find sole query builder method by [@zepfietje](https://github.com/zepfietje) in https://github.com/laravel/framework/pull/54667
* [11.x] Fix regression bug with global `Factory::guessModelNamesUsing()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54665
* [11.x] Fix routeCollection get method return value when searching by dot not… by [@abdel-aouby](https://github.com/abdel-aouby) in https://github.com/laravel/framework/pull/54672
* [11.x] Add `withWhereRelation` method to builder by [@utsavsomaiya](https://github.com/utsavsomaiya) in https://github.com/laravel/framework/pull/54668

## [v11.42.1](https://github.com/laravel/framework/compare/v11.42.0...v11.42.1) - 2025-02-12

* Add Taylor's inspiring quote - We must ship by [@1weiho](https://github.com/1weiho) in https://github.com/laravel/framework/pull/54579
* Type the callback for Relation::noConstraints by [@simon-tma](https://github.com/simon-tma) in https://github.com/laravel/framework/pull/54572
* [11.x] fix: getQualified{Created,Updated}AtColumn never returning null by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/54568
* [11.x] `assertStreamed` and `assertNotStreamed` by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/54566
* [11.x] Add `assertJsonFragments` assertion by [@lioneaglesolutions](https://github.com/lioneaglesolutions) in https://github.com/laravel/framework/pull/54576
* [11.x] `doesntContain` on eloquent collection by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/54567
* [11.x] Allow batching a Closure by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54587

## [v11.42.0](https://github.com/laravel/framework/compare/v11.41.3...v11.42.0) - 2025-02-11

* docs: clarify use of hasOption() by [@jezmck](https://github.com/jezmck) in https://github.com/laravel/framework/pull/54415
* Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54427
* [11.x] add Generics to Paginator's ArrayAccess methods by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/54428
* [11.x] Fix docblocks for code that calls `enum_value()` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54432
* [11.x] Fix assertContent on laravel test that respond with Symfony Response Object by [@tben](https://github.com/tben) in https://github.com/laravel/framework/pull/54467
* [11.x] Add Higher Order Messaging support for last by [@fernandokbs](https://github.com/fernandokbs) in https://github.com/laravel/framework/pull/54459
* [11.x] Database testing traits has impact to artisan calls by [@nivseb](https://github.com/nivseb) in https://github.com/laravel/framework/pull/54458
* [11.x] Add precision to `Number::currency()` by [@benjibee](https://github.com/benjibee) in https://github.com/laravel/framework/pull/54456
* [11.x] Add generics to lazy queries by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/54453
* [11.x] Merge in eager loads from nested where queries by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/54455
* [11.x] Fluent numeric validation by [@xoesae](https://github.com/xoesae) in https://github.com/laravel/framework/pull/54425
* [11.x] Fix casts + `withAttributes` by [@tontonsb](https://github.com/tontonsb) in https://github.com/laravel/framework/pull/54422
* [11.x] Ensure batched jobs are actually batchable by [@josepostiga](https://github.com/josepostiga) in https://github.com/laravel/framework/pull/54442
* [11.x] Update PHPStan to 2.x by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/53716
* Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54475
* Add relative date shorthands to Query Builder by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/54408
* [11.x] feat: add better closure typing in QueriesRelationships by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/54452
* [11.x] Fix the method explodeExplicitRule to support Numeric Validation by [@mrvipchien](https://github.com/mrvipchien) in https://github.com/laravel/framework/pull/54478
* Add `Builder` On Clone callback support by [@ralphjsmit](https://github.com/ralphjsmit) in https://github.com/laravel/framework/pull/54477
* Support relative paths to SQLite databases by [@LukeTowers](https://github.com/LukeTowers) in https://github.com/laravel/framework/pull/54480
* [11.x] Where doesnt have nullable morph by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/54363
* [11.x] Add the ability to skip migrations within tests by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54441
* Queue Integration Tests with Redis Cluster by [@vadimonus](https://github.com/vadimonus) in https://github.com/laravel/framework/pull/54218
* [11.x] Optimize `PendingBatch@ensureJobIsBatchable` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54485
* [11.x] Supports PHPUnit 12.0 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54316
* [11.x] Fix spelling in comment by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/54503
* [11.x] Add Context "missing" method by [@vbergerondev](https://github.com/vbergerondev) in https://github.com/laravel/framework/pull/54499
* [11.x] feat: add generics to Container methods by [@MrMeshok](https://github.com/MrMeshok) in https://github.com/laravel/framework/pull/54543
* [11.x] Add a setAssetRoot method to the UrlGenerator class by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/54530
* [11.x] Handle Null Check in Str::startsWith and Str::endsWith by [@onairmarc](https://github.com/onairmarc) in https://github.com/laravel/framework/pull/54520
* [11.x] Improve check for relative sqlite databases by [@LukeTowers](https://github.com/LukeTowers) in https://github.com/laravel/framework/pull/54513
* Revert "[11.x] Use Str::wrap() instead of nesting Str::start() inside Str::finish()" by [@shaedrich](https://github.com/shaedrich) in https://github.com/laravel/framework/pull/54528
* [11.x] Job Batches with Redis Cluster by [@vadimonus](https://github.com/vadimonus) in https://github.com/laravel/framework/pull/54522
* [11.x] fix: specify type of TClass generic in Container by [@MrMeshok](https://github.com/MrMeshok) in https://github.com/laravel/framework/pull/54545
* [11.x] Improve docblocks for morph maps in `Relation` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54560
* docs: fix return type documentation for initializeSignal method by [@nzsys](https://github.com/nzsys) in https://github.com/laravel/framework/pull/54553
* [11.x] Add support for middlewares & failed handler on broadcastable events by [@Jacobs63](https://github.com/Jacobs63) in https://github.com/laravel/framework/pull/54562
* [11.x] json assertions on streamed content by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/54565

## [v11.41.3](https://github.com/laravel/framework/compare/v11.41.2...v11.41.3) - 2025-01-30

## [v11.41.2](https://github.com/laravel/framework/compare/v11.41.1...v11.41.2) - 2025-01-30

## [v11.41.1](https://github.com/laravel/framework/compare/v11.41.0...v11.41.1) - 2025-01-30

* [11.x] Allow secret key Updates Without Bringing the Site Up by [@rashidlaasri](https://github.com/rashidlaasri) in https://github.com/laravel/framework/pull/54389
* [11.x] use Auth::userResolver when resolving the authenticated user by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/54382
* [11.x] Add `Macroable` and `fill()` to `Support\Fluent` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/54404
* [11.x] Optimize pluck() to avoid redundant column selection by [@zsocakave](https://github.com/zsocakave) in https://github.com/laravel/framework/pull/54396
* [11.x] Optimize `loadTranslationsFrom` function for simplicity and clarity by [@selcukcukur](https://github.com/selcukcukur) in https://github.com/laravel/framework/pull/54407
* feat: gracefully handle command not found exception - avoid creds exposure by [@chinmaypurav](https://github.com/chinmaypurav) in https://github.com/laravel/framework/pull/54406
* Handle pooled Postgres connections for Laravel Cloud by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/54346

## [v11.41.0](https://github.com/laravel/framework/compare/v11.40.0...v11.41.0) - 2025-01-28

* [11.x] more pint rules by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/54332
* [11.x] Allow `TestComponent` to be macroable by [@ziadoz](https://github.com/ziadoz) in https://github.com/laravel/framework/pull/54359
* [11.x] Fix validator return fails if using different date formats by [@mrvipchien](https://github.com/mrvipchien) in https://github.com/laravel/framework/pull/54350
* [11.x] fix  the method `explodeExplicitRule` to support Customizable Date Validation by [@mrvipchien](https://github.com/mrvipchien) in https://github.com/laravel/framework/pull/54353
* [11.x] Adds the `addPath()` method to the `Lang` facade and the `Translator` class. by [@selcukcukur](https://github.com/selcukcukur) in https://github.com/laravel/framework/pull/54347
* Improve: add fire failed event at once by [@cesarMtorres](https://github.com/cesarMtorres) in https://github.com/laravel/framework/pull/54376
* [11.x] feat: Create missing pgsql database when running migrations by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54314
* [11.x] Proper rate limiter fix with phpredis serialization/compression enabled by [@TheLevti](https://github.com/TheLevti) in https://github.com/laravel/framework/pull/54372
* Update Stringable Rule testcases by [@mrvipchien](https://github.com/mrvipchien) in https://github.com/laravel/framework/pull/54387
* [11.x] Use `Date` facade for storing the password confirmation timestamp by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54383

## [v11.40.0](https://github.com/laravel/framework/compare/v11.39.1...v11.40.0) - 2025-01-24

* draft: fix: Don't release lock for ShouldBeUniqueUntilProcessing Job that gets released by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54261
* [11.x] Add Laravel Pint by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53835
* Add self to HasCollection type param in Model by [@thena-seer-sfg](https://github.com/thena-seer-sfg) in https://github.com/laravel/framework/pull/54311
* [11.x] Add pending attributes by [@tontonsb](https://github.com/tontonsb) in https://github.com/laravel/framework/pull/53720
* fix: `schedule:test` on commands using runInBackground by [@dallyger](https://github.com/dallyger) in https://github.com/laravel/framework/pull/54321
* [11.x] Helper methods to dump responses of the Laravel HTTP client by [@morrislaptop](https://github.com/morrislaptop) in https://github.com/laravel/framework/pull/54317
* Add support for cursor editor in ResolvesDumpSource by [@tuxfamily](https://github.com/tuxfamily) in https://github.com/laravel/framework/pull/54318
* [11.x] Add Customizable Date Validation Rule with Flexible Date Constraints by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/53465
* [11.x] start syncing StyleCI rules to Pint by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/54326
* [11.x] apply our new Pint rule to the `/tests` directory by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/54325
* fix(Collection::pop()): count < 1 by [@artumi-richard](https://github.com/artumi-richard) in https://github.com/laravel/framework/pull/54340
* Patch CVE-2025-22145 in nesbot/carbon package by [@dennis-koster](https://github.com/dennis-koster) in https://github.com/laravel/framework/pull/54335
* [11.x] Prevent unintended serialization and compression by [@JeppeKnockaert](https://github.com/JeppeKnockaert) in https://github.com/laravel/framework/pull/54337
* [11.x] Pass collection of models to `whereMorphedTo` /  `whereNotMorphedTo` by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/54324

## [v11.39.1](https://github.com/laravel/framework/compare/v11.39.0...v11.39.1) - 2025-01-22

* fix: collapseWithKeys on empty collection by [@benatoff](https://github.com/benatoff) in https://github.com/laravel/framework/pull/54290
* fix(broadcaster): incorrect channel matching because of dot in pattern by [@021-projects](https://github.com/021-projects) in https://github.com/laravel/framework/pull/54303
* [11.x] Use constructor property promotion for database query condition expression by [@shaedrich](https://github.com/shaedrich) in https://github.com/laravel/framework/pull/54302
* [11.x] Add IncrementOrCreate method to Eloquent by [@carloeusebi](https://github.com/carloeusebi) in https://github.com/laravel/framework/pull/54300
* [11.x] Add additional test cases for Arr helper to enhance coverage by [@mrvipchien](https://github.com/mrvipchien) in https://github.com/laravel/framework/pull/54298
* Bump vite from 5.2.14 to 5.4.12 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/54296
* [11.x] Fix unique jobs that have a uniqueVia method by [@DougSisk](https://github.com/DougSisk) in https://github.com/laravel/framework/pull/54294

## [v11.39.0](https://github.com/laravel/framework/compare/v11.38.2...v11.39.0) - 2025-01-21

* [11.x] Replace duplicate `ValidatedInput` functions with `InteractsWithData` trait by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/54208
* [11.x] Improve `Email` validation rule custom translation messages by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54202
* [11.x] Fix deprecation warnings in `optimize:clear` and `optimize` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54197
* [11.x] Add support for phpredis backoff and max retry config options by [@TheLevti](https://github.com/TheLevti) in https://github.com/laravel/framework/pull/54191
* Introduces UseFactory attribute by [@christopherarter](https://github.com/christopherarter) in https://github.com/laravel/framework/pull/54065
* [11.x] Set class-string generic on `UseFactory` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54215
* [11.x] switch LazyCollection::make() for new LazyCollection() by [@AhmedAlaa4611](https://github.com/AhmedAlaa4611) in https://github.com/laravel/framework/pull/54216
* support style file name hashes with query strings in manifest by [@newapx](https://github.com/newapx) in https://github.com/laravel/framework/pull/54219
* [11.x] Solidify `Rule::email()` tests by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54226
* [11.x] Fix line-ending mismatch in CliDumperTest::testArray and CliDumperTest::testObject by [@AhmedAlaa4611](https://github.com/AhmedAlaa4611) in https://github.com/laravel/framework/pull/54222
* Add a report/log option to filesystem exceptions without throwing by [@lotharthesavior](https://github.com/lotharthesavior) in https://github.com/laravel/framework/pull/54212
* [11.x] Fix Cache component to be aware of phpredis serialization and compression settings by [@TheLevti](https://github.com/TheLevti) in https://github.com/laravel/framework/pull/54221
* [11.x] fix: Forcing DB Session driver to always use the write connection by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54231
* [11.x] Fix line-ending mismatch in `BladeComponentTagCompilerTest` under `Illuminate\Tests\View\Blade` by [@AhmedAlaa4611](https://github.com/AhmedAlaa4611) in https://github.com/laravel/framework/pull/54233
* [11.x]  Fix job not logged in failed_jobs table if timeout occurs within database transaction by [@decaylala](https://github.com/decaylala) in https://github.com/laravel/framework/pull/54173
* [11.x] Fix unique job lock is not released on model not found exception, lock gets stuck. by [@zackAJ](https://github.com/zackAJ) in https://github.com/laravel/framework/pull/54000
* [11.x] Fix line-ending mismatch on Windows test by [@AhmedAlaa4611](https://github.com/AhmedAlaa4611) in https://github.com/laravel/framework/pull/54236
* Added support in DB::prohibitDestructiveCommands to preventing destructive Rollback… by [@hexathos](https://github.com/hexathos) in https://github.com/laravel/framework/pull/54238
* [11.x] Add applyAfterQueryCallbacks Support to Non-Mutator Cases in pluck Method by [@batinmustu](https://github.com/batinmustu) in https://github.com/laravel/framework/pull/54268
* [11.x] `addPath()` Allow adding new path for translation loader. by [@selcukcukur](https://github.com/selcukcukur) in https://github.com/laravel/framework/pull/54277

## [v11.38.2](https://github.com/laravel/framework/compare/v11.38.1...v11.38.2) - 2025-01-15

* [11.x] Simplify Codebase by Using `qualifyColumn` Helper Method by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54187
* Revert "Add support for missing Postgres connection options" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54195
* Revert "[11.x] Support DB aggregate by group (new methods)" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54196

## [v11.38.1](https://github.com/laravel/framework/compare/v11.38.0...v11.38.1) - 2025-01-14

* Fix breaking change - Revert "[11.x] Replace string class names with ::class constants" by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54185
* Add failing test for #54185 by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54186

## [v11.38.0](https://github.com/laravel/framework/compare/v11.37.0...v11.38.0) - 2025-01-14

* Fix offset range in docblock by [@simon-tma](https://github.com/simon-tma) in https://github.com/laravel/framework/pull/54062
* [11.x] Fix breaking change in `RefreshDatabase` by [@SjorsO](https://github.com/SjorsO) in https://github.com/laravel/framework/pull/54075
* [11.x] Fallback to parent methods on `HasUniqueStringIds` trait by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/54096
* [11.x] Adds `finally` method to pipeline helper by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/54110
* Add support for missing Postgres connection options by [@Maniload](https://github.com/Maniload) in https://github.com/laravel/framework/pull/54101
* fix: Don't set newLineWritten to true unless verbosity allows output by [@ConnySjoblom](https://github.com/ConnySjoblom) in https://github.com/laravel/framework/pull/54127
* [11.x] Adds support for Attribute return mutators to the `Eloquent/Builder` pluck method by [@MattBradleyDev](https://github.com/MattBradleyDev) in https://github.com/laravel/framework/pull/54130
* [11.x] Fixes wrong `@mixin` on `SoftDeletes` trait by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/54140
* [11.x] Replace string class names with ::class constants by [@panakour](https://github.com/panakour) in https://github.com/laravel/framework/pull/54134
* [11.x] fix `times()` calls by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/54141
* [11.x] minor readability by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/54117
* Handles factory=null in ConnectException while recording request-response in PendingRequest by [@StSarc](https://github.com/StSarc) in https://github.com/laravel/framework/pull/54121
* [11.x] Refine error messages for detecting lost connections (Debian bookworm compatibility) by [@mfn](https://github.com/mfn) in https://github.com/laravel/framework/pull/54111
* [11.x] fix: filter vendor paths from registered loaders in Application::inferBasePath by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/54119
* [11.x] Allow exceptions to the `optimize` and `optimize:clear` commands by [@jonerickson](https://github.com/jonerickson) in https://github.com/laravel/framework/pull/54070
* Add action filter to route:list by [@miccehedin](https://github.com/miccehedin) in https://github.com/laravel/framework/pull/54135
* No explicit `USE database` statement by [@TheLevti](https://github.com/TheLevti) in https://github.com/laravel/framework/pull/54132
* Add support for custom payloads and channels in broadcasting by [@JanneDeVos](https://github.com/JanneDeVos) in https://github.com/laravel/framework/pull/54099
* [11.x] Add fluent `Email` validation rule by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54067
* [11.x] middleware support for specific method in resource routes by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/53313
* [11.x] Support DB aggregate by group (new methods) by [@GromNaN](https://github.com/GromNaN) in https://github.com/laravel/framework/pull/53679
* Correct return type to match functionality by [@willpower232](https://github.com/willpower232) in https://github.com/laravel/framework/pull/54148
* [11.x] Renaming Traveler to Passable and Stops to Pipes by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54142
* [11.x] Add `Dispatchable::newPendingDispatch()` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54153
* [11.x] Add `FormRequest::array($key)` and `Fluent::array($key)` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/54177
* [11.x] Make methods of `HasRelationships` generic by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54174
* [11.x] Make tests pass on Herd by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/54171
* Revert "Fix: Handle mixed-type values in compileInsert" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54169
* [11.x] Fix docblock for `PendingDispatch@getJob()` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/54158
* pass options to migration events by [@willpower232](https://github.com/willpower232) in https://github.com/laravel/framework/pull/54151
* Encode cache values for SQLite with base64 to prevent failing on \0 characters by [@adamkiss](https://github.com/adamkiss) in https://github.com/laravel/framework/pull/54178
* [11.x] Fix invokable validation rule return type by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/54179

## [v11.37.0](https://github.com/laravel/framework/compare/v11.36.1...v11.37.0) - 2025-01-02

* [11.x] Update Collection::hasAny by [@JeftaAtSiip](https://github.com/JeftaAtSiip) in https://github.com/laravel/framework/pull/53963
* [11.x] Update DetectsLostConnections trait by [@holgerk](https://github.com/holgerk) in https://github.com/laravel/framework/pull/53966
* Fix: (Queue Worker) firing the JobPopped event when $popCallbacks returns null by [@rudenav](https://github.com/rudenav) in https://github.com/laravel/framework/pull/53962
* [11.x] Add `Dumpable` trait to `Uri` by [@nuernbergerA](https://github.com/nuernbergerA) in https://github.com/laravel/framework/pull/53960
* Fix: Handle mixed-type values in compileInsert by [@alipadron](https://github.com/alipadron) in https://github.com/laravel/framework/pull/53948
* [11.x] Add `$ignoreCase` option to `Str::is` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53981
* [11.x] Updates component dependencies  by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53975
* [11.x] Update Uri `withoutQuery` method to accept string or array input by [@1weiho](https://github.com/1weiho) in https://github.com/laravel/framework/pull/53973
* [11.x] Fix cached health endpoint not working when in maintenance mode by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53974
* Add PHPDoc type hints by [@shaedrich](https://github.com/shaedrich) in https://github.com/laravel/framework/pull/53984
* [11.x] Allow passing bool to facade Http@preventStrayRequests() by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53992
* [11.x] Use Str::wrap() instead of nesting Str::start() inside Str::finish() by [@shaedrich](https://github.com/shaedrich) in https://github.com/laravel/framework/pull/53987
* Fix day range in docblock by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53985
* [11.x] Fixes `Illuminate\Http\Response` to output empty string if `$content` is set to `null` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53872
* [11.x] Fix/Improve Resend transport response handling by [@markovic-nikola](https://github.com/markovic-nikola) in https://github.com/laravel/framework/pull/54004
* [11.x] Update View::withErrors() docblock to reflect string parameter support by [@cheack](https://github.com/cheack) in https://github.com/laravel/framework/pull/54009
* 11.x improve resend transport response handling - fix by [@markovic-nikola](https://github.com/markovic-nikola) in https://github.com/laravel/framework/pull/54006
* [11.x] Added new Eloquent methods: `whereDoesntHaveRelation`, `whereMorphDoesntHaveRelation` and their variants with `OR` by [@andrey-helldar](https://github.com/andrey-helldar) in https://github.com/laravel/framework/pull/53996
* [11.x] Re-refresh the database if the `RefreshDatabase` transaction was committed by [@SjorsO](https://github.com/SjorsO) in https://github.com/laravel/framework/pull/53997
* [11.x] add assertFailedWith to InteractsWithQueue trait by [@teddy-francfort](https://github.com/teddy-francfort) in https://github.com/laravel/framework/pull/53980
* Quick doc fix by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54040
* [11.x] Allow using `Illuminate\Support\Uri` on testing HTTP Requests by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/54038
* [11.x] Adding tests for Overlapping Routes by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/54050
* [11.x] adding tests for `null` & `*` key given in `data_get` by [@jwjenkin](https://github.com/jwjenkin) in https://github.com/laravel/framework/pull/54059

## [v11.36.1](https://github.com/laravel/framework/compare/v11.36.0...v11.36.1) - 2024-12-17

* Once Remember Null Values by [@dbpolito](https://github.com/dbpolito) in https://github.com/laravel/framework/pull/53949
* [11.x] Add wildcard directory discovery to the EventServiceProvider by [@jared-cannon](https://github.com/jared-cannon) in https://github.com/laravel/framework/pull/53932
* [11.x] Add `getJob()` method to `PendingDispatch` class + Introduced tests by [@pascalbaljet](https://github.com/pascalbaljet) in https://github.com/laravel/framework/pull/53951
* Avoid writing multiple keys when using redis in cluster mode by [@bentleyo](https://github.com/bentleyo) in https://github.com/laravel/framework/pull/53940
* Revert "[11.x] fix: allows injection using multiple interfaces with the same concrete implementation" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53955
* Revert "[11.x] No need to redeclare variables" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53954

## [v11.36.0](https://github.com/laravel/framework/compare/v11.35.1...v11.36.0) - 2024-12-17

* [11.x] Update `config/mail.php` with supported configuration by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53874
* [11.x] Allows `enum_value()` to be use in standalone `illuminate/collections` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53871
* [11.x] `Uri` and `UriQueryString` implement `Stringable` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53873
* [11.x] Prefer `new Stringable` over `Str::of` and `str()` by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53883
* [11.x] No need to redeclare variables by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53887
* [11.x] Add PHP 8.4 with herd to passthrough variables by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53885
* Add new `Uri` class to default, global aliases by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/53884
* [11.x] Fix attribute mutator access in `loadMissing` by [@SychO9](https://github.com/SychO9) in https://github.com/laravel/framework/pull/53879
* [11.x] Fix `numericAggregate`  on eloquent builder by [@AmirRezaM75](https://github.com/AmirRezaM75) in https://github.com/laravel/framework/pull/53880
* [11.x] Prefer `new Fluent` over `fluent()` helper by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53890
* Patch by [@angelej](https://github.com/angelej) in https://github.com/laravel/framework/pull/53869
* [11.x] `Collection::wrap` by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53891
* [11.x] Bump minimum league/commonmark by [@ah-rahimi](https://github.com/ah-rahimi) in https://github.com/laravel/framework/pull/53899
* [11.x] `Collection::range` by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53895
* [11.x] Added an event that reports files being deleted when calling the `schema:dump --prune` command by [@andrey-helldar](https://github.com/andrey-helldar) in https://github.com/laravel/framework/pull/53870
* [11.x] fix: allows injection using multiple interfaces with the same concrete implementation by [@jamiethorpe](https://github.com/jamiethorpe) in https://github.com/laravel/framework/pull/53275
* [11.x] Early return in Factory::modelName() by [@shaedrich](https://github.com/shaedrich) in https://github.com/laravel/framework/pull/53912
* [11.x] Prevent `blank` Helper from Serializing Eloquent Models by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/53911
* [11.x] Add word-break to mail links by [@seblavoie](https://github.com/seblavoie) in https://github.com/laravel/framework/pull/53906
* Preserve dynamic database connections on reconnect by [@nickakitch](https://github.com/nickakitch) in https://github.com/laravel/framework/pull/53914
* Fix mutexName inconsistency caused by different PHP binary paths on multiple servers by [@waska14](https://github.com/waska14) in https://github.com/laravel/framework/pull/53811
* [11.x] Add `Fluent::set` method by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53946
* [11.x] Fix inspecting columns of raw indexes by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/53945
* [11.x] Allow easier overriding of the exception thrown by invalid ID in route binding by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53944
* [11.x] Fix client path value in file uploads by [@gyaaniguy](https://github.com/gyaaniguy) in https://github.com/laravel/framework/pull/53941

## [v11.35.1](https://github.com/laravel/framework/compare/v11.35.0...v11.35.1) - 2024-12-12

* [11.x] Fix incorrect typechange in `Illuminate\Database\Query\Builder` by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/53841
* Fixed Enum usage in whereHasMorph condition when morph attribute casting by [@Outsidaz](https://github.com/Outsidaz) in https://github.com/laravel/framework/pull/53839
* [11.x] Fix unescaped table names issue of `DatabaseTruncation` trait by introducing `Connection::withoutTablePrefix()` method by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/53842
* Specify node when sending scan to RedisCluster by [@bentleyo](https://github.com/bentleyo) in https://github.com/laravel/framework/pull/53837
* [11.x] fix: cast session lifetime to int by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/53846
* [11.x] allow sub second timeout value for http requests by [@mihaileu](https://github.com/mihaileu) in https://github.com/laravel/framework/pull/53850
* Revert "set schema to smtps if MAIL_ENCRYPTION === tls" by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53863

## [v11.35.0](https://github.com/laravel/framework/compare/v11.34.2...v11.35.0) - 2024-12-10

* [11.x] Supports Symfony 7.2 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53585
* [11.x] Fix database reconnecting logic by [@stancl](https://github.com/stancl) in https://github.com/laravel/framework/pull/53693
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53708
* [11.x] Fix foreignIdFor() when the foreign key is a non-incrementing integer other than ULID by [@edgrosvenor](https://github.com/edgrosvenor) in https://github.com/laravel/framework/pull/53696
* [11.x] Allow sorting routes by precedence in artisan routes:list. by [@mathieutu](https://github.com/mathieutu) in https://github.com/laravel/framework/pull/53706
* [11.x] Update the message for the schedule:work command. by [@AbdelElrafa](https://github.com/AbdelElrafa) in https://github.com/laravel/framework/pull/53710
* [11.x] Support auto-discovery of PSR-17 implementations by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/53711
* [11.x] Improve Error Handler in the ProcessDriver by [@WillTorres10](https://github.com/WillTorres10) in https://github.com/laravel/framework/pull/53712
* [11.x] Comment grammar fixes by [@nexxai](https://github.com/nexxai) in https://github.com/laravel/framework/pull/53714
* [11.x] Replace get_called_class with static::class by [@fernandokbs](https://github.com/fernandokbs) in https://github.com/laravel/framework/pull/53725
* [11.x] Add the pivot's related model when creating from attributes by [@alexwass-lr](https://github.com/alexwass-lr) in https://github.com/laravel/framework/pull/53694
* [11.x] use a consistent alias for `Illuminate\Database\Eloquent\Collection` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53730
* [11.x] switch `Collection::make()` for `new Collection()` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53733
* [11.x] always alias the `Illuminate\Database\Eloquent\Collection` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53735
* [11.x] convert `collect()` helper to `new Collection()` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53726
* [11.x] Improves `Collection` support for enums using `firstWhere()` and `value()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53777
* [11.x] Add Conditionable Trait to Request by [@ahmeti](https://github.com/ahmeti) in https://github.com/laravel/framework/pull/53775
* [11.x] Ignore health endpoint when in maintenance mode by [@joshmanders](https://github.com/joshmanders) in https://github.com/laravel/framework/pull/53772
* [11.x] Add ability to transform `Http\Client\Response` into `Fluent` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53771
* set schema to smtps if MAIL_ENCRYPTION === tls by [@danielrona](https://github.com/danielrona) in https://github.com/laravel/framework/pull/53749
* [11.x] more consistent and readable chaining by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53748
* [11.x] Fix the RateLimiter issue when using dynamic keys by [@MilesChou](https://github.com/MilesChou) in https://github.com/laravel/framework/pull/53763
* [11.x] Add ability to customize or disable `Http\Client\RequestException` message truncation by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53734
* [11.x] Include the initial value in the return types of `reduce()` by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/53798
* [11.x] Add pingOnSuccessIf & pingOnFailureIf to Schedule handling by [@lucacastelnuovo](https://github.com/lucacastelnuovo) in https://github.com/laravel/framework/pull/53795
* [11.x] Improve PHPDoc for nullable properties in `Illuminate\Database\Query\Builder` class by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/53793
* [11.x] Remove usage of `compact()` in Container by [@KennedyTedesco](https://github.com/KennedyTedesco) in https://github.com/laravel/framework/pull/53789
* [11.x] Make `Exceptions@dontTruncateRequestExceptions()` fluent by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53786
* [11.x] Make mailables tappable by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/53788
* URI by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53731
* [11.x] Require `laravel/serializable-closure` on Database component by [@patrickcarlohickman](https://github.com/patrickcarlohickman) in https://github.com/laravel/framework/pull/53822
* [11.x] use new PHP 8 `str_` functions by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53817
* [11.x] handle `password_hash()` failures better by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53821
* [11.x] remove unnecessary `return` statement by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53816
* [11.x] simplify passing arguments to `when()` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53815
* [11.x] remove redundant `array_values` call by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53814
* [11.x] prefer assignment over `array_push` for 1 element by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53813
* [11.x] fix `chopStart` and `chopEnd` tests by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53812
* [11.x] remove temporary variables by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53810
* [11.x] fix `$events` docblock type by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53808
* [11.x] Fix docblock for URI by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53804
* Bump nanoid from 3.3.7 to 3.3.8 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/53831
* [11.x] use promoted properties by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53807
* Revert "[11.x] use promoted properties" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53832
* Using throw config of filesystem disks when faking by [@emulgeator](https://github.com/emulgeator) in https://github.com/laravel/framework/pull/53779
* [11.x] Fix schema names on `DatabaseTruncation` trait (PostgreSQL and SQLServer) by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/53787

## [v11.34.2](https://github.com/laravel/framework/compare/v11.34.1...v11.34.2) - 2024-11-27

* Revert "[11.x] Add non-static JsonResource wrapping" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53686
* [11.x] groupBy() return type phpdoc by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/53684
* [11.x] Fix `withoutOverlapping` for grouped scheduled closures by [@istiak-tridip](https://github.com/istiak-tridip) in https://github.com/laravel/framework/pull/53680
* [11.x] Fix `ResendTransport` missing custom headers by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53687

## [v11.34.1](https://github.com/laravel/framework/compare/v11.34.0...v11.34.1) - 2024-11-26

* Configure cloud log socket by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53666

## [v11.34.0](https://github.com/laravel/framework/compare/v11.33.2...v11.34.0) - 2024-11-26

* [10.x] Fix append and prepend batch to chain by [@Bencute](https://github.com/Bencute) in https://github.com/laravel/framework/pull/53455
* [11.x] Allow `BackedEnum` when using `fromRoute()` in `MakesHttpRequests` by [@wietsewarendorff](https://github.com/wietsewarendorff) in https://github.com/laravel/framework/pull/53593
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53586
* [11.x] Move `$ownerKey` check for `null` to `MorphTo` as `BelongsTo` relationship will always return a `string` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53592
* Unset eloquent model's cached cast attribute by [@adamthehutt](https://github.com/adamthehutt) in https://github.com/laravel/framework/pull/53583
* [11.x] Add non-static JsonResource wrapping by [@SanderMuller](https://github.com/SanderMuller) in https://github.com/laravel/framework/pull/53543
* [10.x] PHP 8.4 Code Compatibility by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53612
* Add assertCount() for fake storage by [@ahmadreza1383](https://github.com/ahmadreza1383) in https://github.com/laravel/framework/pull/53620
* Fix Paginator __construct parameter typehint for phpstan by [@Afrowson](https://github.com/Afrowson) in https://github.com/laravel/framework/pull/53615
* [11.x] Add generics for Arr::last() by [@talkinnl](https://github.com/talkinnl) in https://github.com/laravel/framework/pull/53619
* Add typed closure to bootstrappers in console application by [@MatusBoa](https://github.com/MatusBoa) in https://github.com/laravel/framework/pull/53613
* refactor: Some minor performance & readability enhancements by [@dshafik](https://github.com/dshafik) in https://github.com/laravel/framework/pull/53596
* [11.x] Improve doc blocks for interacting with enum inputs by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/53625
* [11.x] Skip object construction if no rebound callbacks are set by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/53502
* Make the bearerToken method case-insensitive by [@samtlewis](https://github.com/samtlewis) in https://github.com/laravel/framework/pull/53627
* [11.x] Fix attribute inheritance for nested scheduled groups by [@istiak-tridip](https://github.com/istiak-tridip) in https://github.com/laravel/framework/pull/53626
* [11.x] Supports PHP 8.4 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53468
* ☁️ by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53623
* [11.x] Fix typo in docblock by [@stancl](https://github.com/stancl) in https://github.com/laravel/framework/pull/53636
* Add Number::spellOrdinal() to spell ordinals as words. by [@joelstein](https://github.com/joelstein) in https://github.com/laravel/framework/pull/53661
* [11.x] Add PausePrompt fallback by [@jwpage](https://github.com/jwpage) in https://github.com/laravel/framework/pull/53660
* [11.x] Fix `SyntaxError` on Vite prefetch with empty assets by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/53659
* [11.x] Improved `class-string` types by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53657
* [11.x] Use `never` type for methods that always throws by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/53643
* [11.x] Adds conditional to routes by [@Boorinio](https://github.com/Boorinio) in https://github.com/laravel/framework/pull/53654
* [11.x] Make `withoutDefer` also return `$this` by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/53644
* Add shorthands for fake HTTP responses by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/53663
* Use the environment method instead of the isLocal method by [@NaokiTsuchiya](https://github.com/NaokiTsuchiya) in https://github.com/laravel/framework/pull/53638
* [11.x] Fix: Ensure generated policies return boolean values by [@Aluisio-Pires](https://github.com/Aluisio-Pires) in https://github.com/laravel/framework/pull/53632
* Bus assertempty by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/53664
* [11.x] Improve schedule group behaviors by [@istiak-tridip](https://github.com/istiak-tridip) in https://github.com/laravel/framework/pull/53641
* [11.x] Add `Request::fluent` method by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53662
* [11.x] Support named in-memory SQLite connections by [@stancl](https://github.com/stancl) in https://github.com/laravel/framework/pull/53635
* event name & listener callback types by [@rudiedirkx](https://github.com/rudiedirkx) in https://github.com/laravel/framework/pull/53642
* Test cleanup from #53664 by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/53672
* [11.x] Fix: Prevent invalid AWS credentials options being created by [@robchett](https://github.com/robchett) in https://github.com/laravel/framework/pull/53633
* [11.x] Expand `Support\Fluent` data access and transformation capabilities by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53665

## [v11.33.2](https://github.com/laravel/framework/compare/v11.33.1...v11.33.2) - 2024-11-19

* Support ObservedBy on parent model classes by [@adamthehutt](https://github.com/adamthehutt) in https://github.com/laravel/framework/pull/53579
* Revert "[11.x] Support DB aggregate by group" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53582
* [11.x] Fix: Improve Request Port Extraction Handling in ServeCommand.php to Prevent Artisan Command Failures  by [@ahmad-cit22](https://github.com/ahmad-cit22) in https://github.com/laravel/framework/pull/53538

## [v11.33.1](https://github.com/laravel/framework/compare/v11.33.0...v11.33.1) - 2024-11-19

* Marking password params in Database connector with SensitiveParameter attribute by [@philo23](https://github.com/philo23) in https://github.com/laravel/framework/pull/53580

## [v11.33.0](https://github.com/laravel/framework/compare/v11.32.0...v11.33.0) - 2024-11-19

* [11.x] Add "createQuietly" method by [@bramr94](https://github.com/bramr94) in https://github.com/laravel/framework/pull/53558
* [11.x] Trim log channel names by [@mathieutu](https://github.com/mathieutu) in https://github.com/laravel/framework/pull/53554
* [11.x] Fix `withoutOverlapping` via `PendingEventAttributes` proxy  by [@istiak-tridip](https://github.com/istiak-tridip) in https://github.com/laravel/framework/pull/53553
* [11.x] Update docblocks using latest documenter by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53550
* fix: use qualifyColumn rather than assuming format by [@willtj](https://github.com/willtj) in https://github.com/laravel/framework/pull/53559
* [11.x] Add `Request::enums` method to retrieve an array of enums by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53540
* [11.x] hash the token going into the cache by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53561
* Output clean error page on health check route by [@chrispage1](https://github.com/chrispage1) in https://github.com/laravel/framework/pull/53528
* [11.x] Extract `ShowModelCommand` functionality to separate class by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53541
* Add Collection/Generator generic types to public query builder methods by [@rudiedirkx](https://github.com/rudiedirkx) in https://github.com/laravel/framework/pull/53567
* [11.x] consistent multiline constructors by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53566
* [11.x] prefer `new Collection()` over `collect()` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53563
* [11.x] Add builder and collection to `ModelInspector` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53565
* [11.x] Support DB aggregate by group by [@GromNaN](https://github.com/GromNaN) in https://github.com/laravel/framework/pull/53209
* [11.x] add ability to disable relationships in factories by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53450
* Revert "fix: use qualifyColumn rather than assuming format (#53559)"  by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53568
* Bump cross-spawn from 7.0.3 to 7.0.6 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/53569
* [11.x] Removing unused var assignment in Illuminate Router by [@Carnicero90](https://github.com/Carnicero90) in https://github.com/laravel/framework/pull/53575
* [11.x] PHP 8.4 Code compatibility by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53571
* [11.x] Supports `laravel/serializable-closure` 2 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53552
* [11.x] Use getQualifiedOwnerKeyName in relations by [@willtj](https://github.com/willtj) in https://github.com/laravel/framework/pull/53573

## [v11.32.0](https://github.com/laravel/framework/compare/v11.31.0...v11.32.0) - 2024-11-15

* [11.x] Http Client: fake connection exception by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/53485
* [11.x] update the docblock of the runCommand method. by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/53490
* [11.x] Fix extensions of contextual bindings by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/53514
* Update the docblock of the fluentCommands property in the MySqlGrammar by [@tisuchi](https://github.com/tisuchi) in https://github.com/laravel/framework/pull/53509
* [11.x] Don't overwrite custom replacements for count in `trans_choice` by [@patrickrobrecht](https://github.com/patrickrobrecht) in https://github.com/laravel/framework/pull/53517
* [11.x] Allow BackedEnum when asserting redirect-routes by [@wietsewarendorff](https://github.com/wietsewarendorff) in https://github.com/laravel/framework/pull/53498
* Updates docblock for duplicates collection method to correct its return type by [@gms8994](https://github.com/gms8994) in https://github.com/laravel/framework/pull/53499
* [11.x] Add support for syncing associations with array or base collection of models by [@diaafares](https://github.com/diaafares) in https://github.com/laravel/framework/pull/53495
* [11.x] SqsQueue pushRaw options: pass to sendMessage by [@Niush](https://github.com/Niush) in https://github.com/laravel/framework/pull/53507
* [11.x] Allow BackedEnum when using redirectToRoute in ResponseFactory by [@wietsewarendorff](https://github.com/wietsewarendorff) in https://github.com/laravel/framework/pull/53518
* Improve type saftey for Config/Repository.php by [@tisuchi](https://github.com/tisuchi) in https://github.com/laravel/framework/pull/53520
* Fix issue where overwriting middleware variable when setting middleware priority by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/53504
* [11.x] Introduce method `Blueprint::rawColumn()` by [@Jacobs63](https://github.com/Jacobs63) in https://github.com/laravel/framework/pull/53496
* [11.x] Introduce Schedule Grouping by [@istiak-tridip](https://github.com/istiak-tridip) in https://github.com/laravel/framework/pull/53427
* [11.x] Added generics to paginators by [@EranNL](https://github.com/EranNL) in https://github.com/laravel/framework/pull/53512
* Fix `unless` code comment by [@fritz-c](https://github.com/fritz-c) in https://github.com/laravel/framework/pull/53529
* [11.x] Add "head" slot to email layout by [@hivokas](https://github.com/hivokas) in https://github.com/laravel/framework/pull/53531
* [11.x] Http client: record request when faking connection exception by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/53530

## [v11.31.0](https://github.com/laravel/framework/compare/v11.30.0...v11.31.0) - 2024-11-12

* [11.x] Refactor: return Command::FAILURE by [@fernandokbs](https://github.com/fernandokbs) in https://github.com/laravel/framework/pull/53354
* Allow the Batch and Chain onQueue method to accept Backed Enums by [@onlime](https://github.com/onlime) in https://github.com/laravel/framework/pull/53359
* Add transaction generics by [@MatusBoa](https://github.com/MatusBoa) in https://github.com/laravel/framework/pull/53357
* Add laravel default exception blade files to view:cache by [@SamuelWei](https://github.com/SamuelWei) in https://github.com/laravel/framework/pull/53353
* [11.x] Added `useCascadeTruncate` method for `PostgresGrammar` by [@korkoshko](https://github.com/korkoshko) in https://github.com/laravel/framework/pull/53343
* Add Application::removeDeferredServices method by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/53362
* Add the ability to append and prepend middleware priority from the application builder by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/53326
* Fix typo in Translator code comment by [@caendesilva](https://github.com/caendesilva) in https://github.com/laravel/framework/pull/53366
* [11.x] Handle HtmlString constructed with a null by [@sperelson](https://github.com/sperelson) in https://github.com/laravel/framework/pull/53367
* [11.x] Add `URL::forceHttps()` to enforce HTTPS scheme for URLs by [@dasundev](https://github.com/dasundev) in https://github.com/laravel/framework/pull/53381
* [11.x] Refactor and add remaining test cases for the DatabaseUuidFailedJobProviderTest class by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/53408
* [11.X] Postgres Aurora failover - DetectsLostConnections by [@vifer](https://github.com/vifer) in https://github.com/laravel/framework/pull/53404
* `whereFullText` case consistency by [@parth391](https://github.com/parth391) in https://github.com/laravel/framework/pull/53395
* [11.x] Add `HasFactory` trait to `make:model` generation command using `--all` options by [@adel007gh](https://github.com/adel007gh) in https://github.com/laravel/framework/pull/53391
* Introduce support for popping items from a stackable context item by [@denjaland](https://github.com/denjaland) in https://github.com/laravel/framework/pull/53403
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53414
* [11.x] Add ability to dynamically build mailers on-demand using `Mail::build` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53411
* [11.x] Refactor and add remaining test cases for the DatabaseFailedJobProviderTest class by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/53409
* [11.x] Fix error event listener in Vite prefetching by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/53439
* [11.x] Ensure datetime cache durations account for script execution time by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53431
* [11.x] Fix fluent syntax for HasManyThrough when combining HasMany followed by HasOne by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/53335
* Correct parameter type of Collection::diffKeys() and Collection::diffKeysUsing() by [@AJenbo](https://github.com/AJenbo) in https://github.com/laravel/framework/pull/53441
* Correct parameter type of Collection::intersectByKeys() by [@AJenbo](https://github.com/AJenbo) in https://github.com/laravel/framework/pull/53444
* Fix schema foreign ID support for tables with non-standard primary key by [@willrowe](https://github.com/willrowe) in https://github.com/laravel/framework/pull/53442
* [11.x] Cache token repository by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53428
* Fix validation message when there is a parameter with escaped dot "." by [@mdmahbubhelal](https://github.com/mdmahbubhelal) in https://github.com/laravel/framework/pull/53416
* [11.x] add optional prefix for cache key by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53448
* [11.x] Do not overwrite existing link header(s) in `AddLinkHeadersForPreloadedAssets` middleware by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/53463
* [11.x] use assertTrue and assertFalse method, instead of using assertE… by [@iamyusuf](https://github.com/iamyusuf) in https://github.com/laravel/framework/pull/53453
* [11.x] Add `DB::build` method by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53464
* [11.x] Add ability to dynamically build cache repositories on-demand using `Cache::build` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/53454
* [11.x] Skip the number of connections transacting while testing to run callbacks by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/53377

## [v11.30.0](https://github.com/laravel/framework/compare/v11.29.0...v11.30.0) - 2024-10-30

* Add `$bind` parameter to `Blade::directive` by [@hossein-zare](https://github.com/hossein-zare) in https://github.com/laravel/framework/pull/53279
* [11.x] Fix `trans_choice()` when translation replacement include `|` separator by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53331
* [11.x] Allow the authorize method to accept Backed Enums directly by [@johanvanhelden](https://github.com/johanvanhelden) in https://github.com/laravel/framework/pull/53330
* [11.x] use `exists()` instead of `count()` by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/53328
* [11.x] Docblock Improvements by [@mtlukaszczyk](https://github.com/mtlukaszczyk) in https://github.com/laravel/framework/pull/53325
* Allow for custom Postgres operators to be added by [@boris-glumpler](https://github.com/boris-glumpler) in https://github.com/laravel/framework/pull/53324
* [11.x] Support Optional Dimensions for `vector` Column Type by [@akr4m](https://github.com/akr4m) in https://github.com/laravel/framework/pull/53316
* [11.x] Test Improvements by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/53306
* [11.x] Added `dropColumnsIfExists`, `dropColumnIfExists` and `dropForeignIfExists` by [@eusonlito](https://github.com/eusonlito) in https://github.com/laravel/framework/pull/53305
* [11.x] Provide an error message for PostTooLargeException by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/53301
* [11.x] Fix integrity constraint violation on failed_jobs_uuid_unique by [@bytestream](https://github.com/bytestream) in https://github.com/laravel/framework/pull/53264
* Revert "[11.x] Added `dropColumnsIfExists`, `dropColumnIfExists` and `dropForeignIfExists`" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53338
* [11.x] Introduce `HasUniqueStringIds` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53280
* [11.x] Refactor: check for contextual attribute before getting parameter class name by [@korkoshko](https://github.com/korkoshko) in https://github.com/laravel/framework/pull/53339
* [11.x] Pick up existing views and markdowns when creating mails by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/53308
* [11.x] Add withoutDefer and withDefer testing helpers by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53340

## [v11.29.0](https://github.com/laravel/framework/compare/v11.28.1...v11.29.0) - 2024-10-22

* [10.x] Ensure headers are only attached to illuminate responses by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53019
* [11.x] Component name guessing with prefix by [@royduin](https://github.com/royduin) in https://github.com/laravel/framework/pull/53183
* [11.x] Allow list of rate limiters without requiring unique keys by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53177
* Add directive [@bool](https://github.com/bool) to Blade by [@david-valdivia](https://github.com/david-valdivia) in https://github.com/laravel/framework/pull/53179
* [11.x] Fixes handling `Js::from(collect());` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53206
* [11.x] fix PHPDoc for \Illuminate\Redis\Connections\Connection::$events by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/53211
* [11.x] fix PHPDoc for \Illuminate\Database\Connection by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/53212
* [11.x] Include class-string generics for Validator::$exception by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53210
* [11.x] Remove a few useless return void statements. by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/53225
* [11.x] Fixes phpdoc type of Number::forHumans() by [@toarupg0318](https://github.com/toarupg0318) in https://github.com/laravel/framework/pull/53218
* [11.x] Fix handling exceptions thrown in eval()'d code by [@jlabedo](https://github.com/jlabedo) in https://github.com/laravel/framework/pull/53204
* [11.x] Allow using `castAsJson()` on non default db connection during test by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53256
* Improve query builder tests by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53251
* [11.x] Fix incorrect bindings in DB::update when using a collection as a value by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53254
* fix: EloquentCollection find and unique generics by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/53239
* [11.x] Add getConnection() Method to Factory Class for Retrieving Database Connection by [@jonathanpmartins](https://github.com/jonathanpmartins) in https://github.com/laravel/framework/pull/53237
* [11.x] Add `waitUntil` method to `Process` by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/53236
* Allow Vite entry points to be merged by [@JackWH](https://github.com/JackWH) in https://github.com/laravel/framework/pull/53233
* [11.x] Add helper method to determine stray request prevention state by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/53232
* [11.x] Fix typo `$previousLCurrency` to `$previousCurrency` for clarity and consistency by [@mdariftiens](https://github.com/mdariftiens) in https://github.com/laravel/framework/pull/53261

## [v11.28.1](https://github.com/laravel/framework/compare/v11.28.0...v11.28.1) - 2024-10-16

* [11.x] Fix trim getting discarded in `ViewMakeCommand` by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/53174
* [11.x] Discard `PHP_CLI_SERVER_WORKERS` on Windows environment by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53178
* [11.x] Improves PHP 8.4 compatibility by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53182
* [11.x] Fix handling empty values passed to `enum_value()` function instead of only empty string by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53181

## [v11.28.0](https://github.com/laravel/framework/compare/v11.27.2...v11.28.0) - 2024-10-15

* [11.x] Update Authorizable methods with BackedEnum support by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/53079
* [11.x] Use `null` as default cursor value for PHP Redis by [@jayan-blutui](https://github.com/jayan-blutui) in https://github.com/laravel/framework/pull/53095
* [11.x] PHPDoc Improvements by [@schulerj89](https://github.com/schulerj89) in https://github.com/laravel/framework/pull/53097
* [11.x] Fix resource not escaped correctly in substituteBindingsIntoRawSql() by [@aedart](https://github.com/aedart) in https://github.com/laravel/framework/pull/53100
* [11.x] feat: add useful defaultLocale and defaultCurrency helpers to Number facade by [@sts-ryan-holton](https://github.com/sts-ryan-holton) in https://github.com/laravel/framework/pull/53101
* [11.x] Fix determining pivot timestamp column name(s) when parent relation missing one or both of timestamps by [@daniser](https://github.com/daniser) in https://github.com/laravel/framework/pull/53103
* [11.x] Add phpstan assertions for last in Collection isEmpty and isNotEmpty by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/53107
* feat: interactive env:encrypt & env:decrypt by [@hhermsen](https://github.com/hhermsen) in https://github.com/laravel/framework/pull/53081
* [11.x] PHPDoc Improvements by [@schulerj89](https://github.com/schulerj89) in https://github.com/laravel/framework/pull/53109
* [11.x] Feat: remove HasFactory in model when not required by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/53104
* [11.x] Add `Illuminate\Support\enum_value` to resolve `BackedEnum` or `UnitEnum` to scalar by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53096
* [11.x] allow guessing of nested component by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/52669
* [11.x] Introduce RouteParameter attribute by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/53080
* [11.x] Refactored to use enum_value() in castBinding() by [@toarupg0318](https://github.com/toarupg0318) in https://github.com/laravel/framework/pull/53131
* [11.x] Test Improvements remove code duplication by [@toarupg0318](https://github.com/toarupg0318) in https://github.com/laravel/framework/pull/53128
* Revert "[11.x] Test Improvements remove code duplication" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/53132
* [11.x] Fix HasManyThrough::one() by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/53119
* [11.x] Console supports Laravel Prompts 0.3+ by [@edjw](https://github.com/edjw) in https://github.com/laravel/framework/pull/53136
* [11.x] PHPDoc Improvements by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/53139
* fix: make model command with folder path - factory incorrect import path by [@JeRabix](https://github.com/JeRabix) in https://github.com/laravel/framework/pull/53142
* [11.x] feat: refine return type for `throw_if` and `throw_unless` to reflect actual behavior with "falsey" values by [@crishoj](https://github.com/crishoj) in https://github.com/laravel/framework/pull/53154
* [11.x] Ensure `where` with array respects boolean by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53147
* [11.x] Gracefully handle null passwords when verifying credentials by [@gbradley](https://github.com/gbradley) in https://github.com/laravel/framework/pull/53156
* [11.x] feat: restore type-narrowing bahavior for `throw_*` helpers by [@crishoj](https://github.com/crishoj) in https://github.com/laravel/framework/pull/53164
* [11.x] Add CollectedBy attribute by [@alsterholm](https://github.com/alsterholm) in https://github.com/laravel/framework/pull/53122
* [11.x] Add successful and failed methods to `ProcessPoolResults` by [@Riley19280](https://github.com/Riley19280) in https://github.com/laravel/framework/pull/53160
* Issue with constrained() method used after foreignIdFor(), instead of table name when $table parameter is not passed uses column name by [@granitibrahimi](https://github.com/granitibrahimi) in https://github.com/laravel/framework/pull/53144

## [v11.27.2](https://github.com/laravel/framework/compare/v11.27.1...v11.27.2) - 2024-10-09

* [11.x] Fixes regression with `queue:work` Command by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53076
* [11.x] Fixes parameter declaration for `ServiceProvider::optimizes()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53074

## [v11.27.1](https://github.com/laravel/framework/compare/v11.27.0...v11.27.1) - 2024-10-08

* [11.x] Fix border overflow on theme switcher when hovering by [@mezotv](https://github.com/mezotv) in https://github.com/laravel/framework/pull/53064
* [11.x] Optimize commands registry by [@erikgaal](https://github.com/erikgaal) in https://github.com/laravel/framework/pull/52928
* [11.x] Fix laravel/framework#53071 by [@it-can](https://github.com/it-can) in https://github.com/laravel/framework/pull/53072

## [v11.27.0](https://github.com/laravel/framework/compare/v11.26.0...v11.27.0) - 2024-10-08

* [11.x] feat: narrow types for throw_if and throw_unless by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/53005
* [11.x]  Prevent calling tries() twice by [@themsaid](https://github.com/themsaid) in https://github.com/laravel/framework/pull/53010
* [11.x] Improve PHPDoc  by [@schulerj89](https://github.com/schulerj89) in https://github.com/laravel/framework/pull/53009
* [11.x] Utilise `Illuminate\Support\php_binary()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/53008
* [11.x] Set HasAttributes[@casts](https://github.com/casts)() array generics by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/53024
* [11.x] Improve `Schema::hasTable()` performance by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/53006
* [11.x] Always inherit parent attributes by [@royduin](https://github.com/royduin) in https://github.com/laravel/framework/pull/53011
* [11.x] feat: introduce option to change default Number currency by [@sts-ryan-holton](https://github.com/sts-ryan-holton) in https://github.com/laravel/framework/pull/53022
* [11.x] feat: add Str::doesntContain() method and supporting tests by [@sts-ryan-holton](https://github.com/sts-ryan-holton) in https://github.com/laravel/framework/pull/53035
* [11.x] Str: Add extension support for `Str::inlineMarkdown()` by [@ryangjchandler](https://github.com/ryangjchandler) in https://github.com/laravel/framework/pull/53033
* Fix: Correct typehint on repository retrieval methods by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/53025
* [11.x] Test for forgetting non-flexible keys for file driver by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/53018
* Add metadata to mailable view data by [@TobMoeller](https://github.com/TobMoeller) in https://github.com/laravel/framework/pull/53042
* [11.x] PHPDoc Improvements by [@schulerj89](https://github.com/schulerj89) in https://github.com/laravel/framework/pull/53054
* [11.x] Test Improvements by [@toarupg0318](https://github.com/toarupg0318) in https://github.com/laravel/framework/pull/53057
* [11.x] PHPDoc Improvements by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/53053
* Add Exception Handling for jsonOptions() Method by [@shamimulalam](https://github.com/shamimulalam) in https://github.com/laravel/framework/pull/53056
* [11.x] Fixes `make:model` for Form Requests by [@joshmanders](https://github.com/joshmanders) in https://github.com/laravel/framework/pull/53052
* [11.x] Fixes validation using `shouldConvertToBoolean` when parameter uses dot notation by [@bytestream](https://github.com/bytestream) in https://github.com/laravel/framework/pull/53048
* [11.x] Add methods to the HTTP kernel to append middleware relative to other middleware by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/52897
* [11.x] Add `--json` flag to `queue:work` command for structured logging by [@josecl](https://github.com/josecl) in https://github.com/laravel/framework/pull/52887
* [11.x] Improve performance of Redis queue block_for when a worker has multiple queues to service by [@michael-scinocca](https://github.com/michael-scinocca) in https://github.com/laravel/framework/pull/52826

## [v11.26.0](https://github.com/laravel/framework/compare/v11.25.0...v11.26.0) - 2024-10-01

* [11.x] Fix PHPDoc typo by [@LucaRed](https://github.com/LucaRed) in https://github.com/laravel/framework/pull/52960
* Add stop() method to Process and Pool by [@MiniCodeMonkey](https://github.com/MiniCodeMonkey) in https://github.com/laravel/framework/pull/52959
* [11.x] Improve PHPDoc by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/52949
* [11.x] Fix crash of method PreventsCircularRecursion::withoutRecursion() on mocked models by [@maximetassy](https://github.com/maximetassy) in https://github.com/laravel/framework/pull/52943
* [11.x] Document callable types for `Enumerable::implode()` by [@devfrey](https://github.com/devfrey) in https://github.com/laravel/framework/pull/52937
* [11.x] Allows Unit & Backed Enums for registering named `RateLimiter` & `RateLimited` middleware by [@sethsandaru](https://github.com/sethsandaru) in https://github.com/laravel/framework/pull/52935
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52933
* [11.x] Fixes trust proxy `REMOTE_ADDR` not working in Swoole by [@chuoke](https://github.com/chuoke) in https://github.com/laravel/framework/pull/52889
* [11.x] Fixes function loading conflicts when using `[@include](https://github.com/include)('vendor/autoload.php')` via Laravel Envoy by [@s-damian](https://github.com/s-damian) in https://github.com/laravel/framework/pull/52974
* [11.x] Support Laravel Prompts 0.3+ by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52993
* Allow mass assignment with mutators when using model::guarded by [@Apfelfrisch](https://github.com/Apfelfrisch) in https://github.com/laravel/framework/pull/52962
* [11.x] Add `make:job-middleware` artisan command by [@dshafik](https://github.com/dshafik) in https://github.com/laravel/framework/pull/52965
* [11.x] Auto discover Events outside app namespace when folder name is in kebab-case by [@xizprodev](https://github.com/xizprodev) in https://github.com/laravel/framework/pull/52976
* [11.x] Feat: factory generic in make:model command by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/52855

## [v11.25.0](https://github.com/laravel/framework/compare/v11.24.1...v11.25.0) - 2024-09-26

* [11.x] Fix make:listener command by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/52924
* [11.x] Fix incorrect PHPDoc for KeyBy and GroupBy by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/52918
* [11.x] Fix PHPDoc for TestResponse's `Response` Type to \Symfony\Component\HttpFoundation\Response by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/52915
* [11.x] Docblock Improvements by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/52909
* [11.x] Add vector column support to migrations by [@Jim-Webfox](https://github.com/Jim-Webfox) in https://github.com/laravel/framework/pull/52884
* [11.x] Revert auto-discovering `routes/console.php` as this will cause breaking change with the default `withRouting($console)` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52942
* [11.x] Fixed docblock on typeVector method in Grammer by [@flavio-schoute](https://github.com/flavio-schoute) in https://github.com/laravel/framework/pull/52927

## [v11.24.1](https://github.com/laravel/framework/compare/v11.24.0...v11.24.1) - 2024-09-25

* [11.x] Fixes `defer()` function return type by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/52910
* [11.x] Fixes missing `ExecutableFinder` import by [@InfinityXTech](https://github.com/InfinityXTech) in https://github.com/laravel/framework/pull/52912
* [11.x] Fix for not automatically registering commands in App\Console\Commands by [@SamuelNitsche](https://github.com/SamuelNitsche) in https://github.com/laravel/framework/pull/52903

## [v11.24.0](https://github.com/laravel/framework/compare/v11.23.5...v11.24.0) - 2024-09-24

* [11.x] Fix issue where `$name` variable in non base config file becomes it's key by [@rojtjo](https://github.com/rojtjo) in https://github.com/laravel/framework/pull/52738
* [11.x] PHPDoc Improvements by [@amitmerchant1990](https://github.com/amitmerchant1990) in https://github.com/laravel/framework/pull/52797
* [11.x] Remove a unused import and fix docblock for DeferredCallbackCollection by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52808
* [11.x] Handle SQLSTATE[HY000] [2002] Operation now in progress in DetectsLostConnection trait #52759 by [@webartisan10](https://github.com/webartisan10) in https://github.com/laravel/framework/pull/52805
* [11.x] Add prependLocation method to View Factory by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/52806
* [11.x] add nullOnUpdate() method to ForeignKeyDefinition by [@gisuNasr](https://github.com/gisuNasr) in https://github.com/laravel/framework/pull/52798
* [11.x] Allow `BackedEnum` to be passed to `Route::can()`  by [@Omegadela](https://github.com/Omegadela) in https://github.com/laravel/framework/pull/52792
* [11.x] Ensure headers are only attached to illuminate responses by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52789
* [11.x] feat: improve Collection groupBy, keyBy generics by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52787
* [11.x] Using Correct `Concurrency` Configuration Index Name by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/52788
* [11.x] Ensure `withoutPretending` method properly resets state after callback execution by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/52794
* [11.x] delegate `ProcessDriver[@defer](https://github.com/defer)()` to `ProcessDriver[@run](https://github.com/run)()` method by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/52807
* [11.x] Use command string instead of array on `Concurrency\ProcessDriver` by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/52813
* [11.x] Allows Laravel Framework to correctly resolve PHP binary when running via Laravel Herd by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52791
* [11.x] Move Defer classes to Support component and add `Illuminate\Support\defer` function by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52801
* [11.x] Suggest `laravel/serializable-closure` on Database component by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52835
* Bump vite from 5.2.10 to 5.2.14 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/52834
* [11.x] Update Concurrency component's composer dependencies by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/52836
* Add result shorthands for `Process` fakes by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/52840
* Update SerializesCastableAttributes to include array generics by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/52841
* [11.x] CI Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52850
* [11.x] Supports `laravel/prompts` v0.2 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52849
* [11.x] Handle allows null parameter instead of requiring default value by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52866
* [11.x] Adds `[@throws](https://github.com/throws)` section to Concurrency manager doc block by [@rnambaale](https://github.com/rnambaale) in https://github.com/laravel/framework/pull/52856
* Update stub to remove unused trait imports by [@lombervid](https://github.com/lombervid) in https://github.com/laravel/framework/pull/52877
* [11.x] Fix validation rule type hints by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/52870
* [11.x] Support multiple batch IDs when retrying failed batch jobs by [@skegel13](https://github.com/skegel13) in https://github.com/laravel/framework/pull/52873
* [11.x] Remove unused namespaces from DatabaseInspectionCommand and LocalFileSystemAdapter by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/52868
* [11.x] Auto-register commands in `routes/console.php` by [@SamuelNitsche](https://github.com/SamuelNitsche) in https://github.com/laravel/framework/pull/52867
* [11.x] Prevent infinite recursion on `touchesParents()` for chaperoned models by [@samlev](https://github.com/samlev) in https://github.com/laravel/framework/pull/52883
* Bump rollup from 4.17.1 to 4.22.4 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/52892
* [11.x] `Cache::flexible` improvements by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52891
* [11.x] Add `\DateTimeInterface` and `\DateInterval` to type for `Cache::flexible()` by [@bram-pkg](https://github.com/bram-pkg) in https://github.com/laravel/framework/pull/52888
* [11.x] CI Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52851
* [11.x] Do not trigger missing translation key handling when checking existence of translation key by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52895

## [v11.23.5](https://github.com/laravel/framework/compare/v11.23.4...v11.23.5) - 2024-09-13

* allow recursive Model::withoutTimestamps calls by [@m1guelpf](https://github.com/m1guelpf) in https://github.com/laravel/framework/pull/52768
* [11.x] Fixes out of memory issue running `route:cache` with ServeFile by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52781

## [v11.23.4](https://github.com/laravel/framework/compare/v11.23.2...v11.23.4) - 2024-09-12

* [10.x] Fixes `whereDate`, `whereDay`, `whereMonth`, `whereTime`, `whereYear` and `whereJsonLength` to ignore invalid `$operator` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52704
* [11.x] Fixing Concurrency Facade Docblocks by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/52764
* [11.x] add lazy default to when helper by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/52747
* Fix arguments passed to artisan commands that start with 'env' by [@willrowe](https://github.com/willrowe) in https://github.com/laravel/framework/pull/52748

## [v11.23.2](https://github.com/laravel/framework/compare/v11.23.1...v11.23.2) - 2024-09-11

## [v11.23.1](https://github.com/laravel/framework/compare/v11.23.0...v11.23.1) - 2024-09-11

## [v11.23.0](https://github.com/laravel/framework/compare/v11.22.0...v11.23.0) - 2024-09-11

* [11.x] Fix $fail closure type in docblocks for validation rules by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/52644
* [11.x] Add MSSQL 2017 and PGSQL 10 builds by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/52631
* Update `everyThirtyMinutes` cron expression by [@SamuelNitsche](https://github.com/SamuelNitsche) in https://github.com/laravel/framework/pull/52662
* Bump micromatch from 4.0.5 to 4.0.8 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/52664
* [11.x] apply excludeUnvalidatedArrayKeys to list validation by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/52658
* [11.x] Adding minRatio & maxRatio rules on Dimension validation ruleset by [@CamKem](https://github.com/CamKem) in https://github.com/laravel/framework/pull/52482
* [11.x] Add BackedEnum support to Authorize middleware by [@diaafares](https://github.com/diaafares) in https://github.com/laravel/framework/pull/52679
* [11.x] Add BackedEnum support to Gate methods by [@diaafares](https://github.com/diaafares) in https://github.com/laravel/framework/pull/52677
* [11.x] Suggest serializable-closure by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/52673
* [11.x] Fix alter table expressions on SQLite by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/52678
* [11.x] Add Exceptions\Handler::mapLogLevel(...) so the logic can be easily overridden by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/52666
* [11.x] Bugfix for calling pluck() on chaperoned relations. by [@samlev](https://github.com/samlev) in https://github.com/laravel/framework/pull/52680
* [11.x] Fix build failures due to enum collide After adding BackedEnum support to Gate by [@diaafares](https://github.com/diaafares) in https://github.com/laravel/framework/pull/52683
* Fixing Str::trim to remove the default trim/ltrim/rtim characters " \n\r\t\v\0"  by [@mathiasgrimm](https://github.com/mathiasgrimm) in https://github.com/laravel/framework/pull/52684
* [11.x] Add `Skip` middleware for Queue Jobs by [@KennedyTedesco](https://github.com/KennedyTedesco) in https://github.com/laravel/framework/pull/52645
* [11.x] Fix etag headers for binary file responses by [@wouterrutgers](https://github.com/wouterrutgers) in https://github.com/laravel/framework/pull/52705
* [11.x] add `withoutDelay()` to PendingDispatch by [@KennedyTedesco](https://github.com/KennedyTedesco) in https://github.com/laravel/framework/pull/52696
* [11.x] Refactor `Container::getInstance()` to use null coalescing assignment by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/52693
* [11.x] Removed unnecessary call to setAccessible(true) by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/52691
* [11.x] Add `Eloquent\Collection::findOrFail` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/52690
* [11.x] PHPStan Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52712
* [11.x] Fix Collection PHPDoc by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/52724
* [11.x] Add optional parameter for `confirmed` validator rule by [@jwpage](https://github.com/jwpage) in https://github.com/laravel/framework/pull/52722
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52718
* [11.x] Fix incorrect variable-length argument `$guards` from array to string by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/52719
* Allow testing of relative signed routes by [@shealavington](https://github.com/shealavington) in https://github.com/laravel/framework/pull/52726
* [11.x] fix: Builder::with closure types by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52729
* Laracon 2024 by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/52710
* Add `Tag` attribute by [@TijmenWierenga](https://github.com/TijmenWierenga) in https://github.com/laravel/framework/pull/52743
* [11.x] Adds BackedEnum to PendingDispatch's phpDoc for onQueue, allOnQueue, onConnection, allOnConnection methods by [@sethsandaru](https://github.com/sethsandaru) in https://github.com/laravel/framework/pull/52739
* New when() helper. by [@danmatthews](https://github.com/danmatthews) in https://github.com/laravel/framework/pull/52665
* [11.x] Add `fromUrl()` to Attachment by [@KennedyTedesco](https://github.com/KennedyTedesco) in https://github.com/laravel/framework/pull/52688

## [v11.22.0](https://github.com/laravel/framework/compare/v11.21.0...v11.22.0) - 2024-09-03

* [11.x] Fix FoundationServiceProvider docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52542
* [11.x] Fix ReflectionParameter [@param](https://github.com/param) type on Util::getContextualAttributeFromDependency() by [@samsonasik](https://github.com/samsonasik) in https://github.com/laravel/framework/pull/52541
* [11.x] More specific parameter type in CastsInboundAttributes by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/52536
* [11.x] Unify prefetch API by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52550
* [11.x] Add PDO subclass support for PHP 8.4 by [@ju5t](https://github.com/ju5t) in https://github.com/laravel/framework/pull/52538
* [11.x] Handle circular references in model serialization by [@samlev](https://github.com/samlev) in https://github.com/laravel/framework/pull/52461
* [11.x] Eloquent inverse relations by [@samlev](https://github.com/samlev) in https://github.com/laravel/framework/pull/51582
* [11.x] Feature/whereany closures by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/52555
* [11.x] Update remaining workflows to run on latest possible ubuntu version by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/52566
* Correct comments to better represent the updated method functionality by [@dropweb](https://github.com/dropweb) in https://github.com/laravel/framework/pull/52564
* [11.x] Support CSP nonce by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52558
* [11.x] Allow enums to be passed to routes by [@NickSdot](https://github.com/NickSdot) in https://github.com/laravel/framework/pull/52561
* [11.x] SORT_NATURAL on Collection no longer throws warning for nulls by [@Chaplinski](https://github.com/Chaplinski) in https://github.com/laravel/framework/pull/52557
* [11.x] Allow prefetch to start on custom event by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52574
* [11.x] Fix regression in database assertions with custom model connections by [@devfrey](https://github.com/devfrey) in https://github.com/laravel/framework/pull/52581
* [11] Update DetectsLostConnections.php by [@webartisan10](https://github.com/webartisan10) in https://github.com/laravel/framework/pull/52614
* Fix docblock for `Model::getEventDispatcher()` by [@inmula](https://github.com/inmula) in https://github.com/laravel/framework/pull/52602
* [11.x] Restore Request::HEADER_X_FORWARDED_PREFIX in TrustProxies by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/52598
* [11.x] Accepts BackedEnum for onQueue, onConnection, allOnQueue, and allOnConnection methods in the Queueable trait by [@sethsandaru](https://github.com/sethsandaru) in https://github.com/laravel/framework/pull/52604
* [11.x] Use the same parameter type for 'throwUnless' as used for 'throwIf' by [@pataar](https://github.com/pataar) in https://github.com/laravel/framework/pull/52626
* [11.x] Pass iterable keys to `withProgressBar` in InteractsWithIO by [@robinmoisson](https://github.com/robinmoisson) in https://github.com/laravel/framework/pull/52623
* [11.x] Fix docblock for Filesystem::hash() by [@sunaoka](https://github.com/sunaoka) in https://github.com/laravel/framework/pull/52630
* Fix Apostrophe Handling in SeeInOrder.php and Enhance Test Coverage by [@nomitoor](https://github.com/nomitoor) in https://github.com/laravel/framework/pull/52627
* [11.x] SQLite Error: "General error: 1 no such table" after adding a foreign key when using a table prefix. by [@incrize](https://github.com/incrize) in https://github.com/laravel/framework/pull/52578

## [v11.21.0](https://github.com/laravel/framework/compare/v11.20.0...v11.21.0) - 2024-08-20

* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52402
* [11.x] Fix docblock for the event dispatcher by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52411
* [11.x] fix: Update text email template by [@tranvanhieu01012002](https://github.com/tranvanhieu01012002) in https://github.com/laravel/framework/pull/52417
* [11.x] Make `expectsChoice` assertion more intuitive with associative arrays. by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/52408
* [11.x]  Add `resource()` method to Illuminate\Http\Client\Response by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52412
* [10.x] fix: prevent casting empty string to array from triggering json error by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52415
* [11.x] Add ResponseInterface mixin to `Illuminate\Http\Client\Response` by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52410
* [11.x] Don't touch BelongsTo relationship when it doesn't exist by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/52407
* [11.x] Fix `Factory::afterCreating` callable argument type by [@villfa](https://github.com/villfa) in https://github.com/laravel/framework/pull/52424
* [11.x] Auto-secure cookies by [@fabricecw](https://github.com/fabricecw) in https://github.com/laravel/framework/pull/52422
* fix: add missing phpdoc types for Model::$table and Model::$dateFormat by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/52425
* [11.x] Add `withoutHeaders` method by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/52435
* Checking availability before calling Log::flushSharedContext() method by [@ajaxray](https://github.com/ajaxray) in https://github.com/laravel/framework/pull/52470
* [11.x] MessageBag errors out when custom rules are created and the class is left out of the message array by [@DanteB918](https://github.com/DanteB918) in https://github.com/laravel/framework/pull/52451
* Create Notification make command markdown name placeholder from Notif… by [@hosseinakbari-liefermia](https://github.com/hosseinakbari-liefermia) in https://github.com/laravel/framework/pull/52465
* [11.x] Add `forceDestroy` to `SoftDeletes` by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/52432
* Make SQLiteProcessor cope with '/' in column names by [@vroomfondle](https://github.com/vroomfondle) in https://github.com/laravel/framework/pull/52490
* [11.x] Improve Cookie Testing Coverage by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/52472
* [11.x] Fix for #52436 artisan schema:dump infinite recursion by [@rust17](https://github.com/rust17) in https://github.com/laravel/framework/pull/52492
* Run prepareNestedBatches on append/prependToChain & chain by [@SabatinoMasala](https://github.com/SabatinoMasala) in https://github.com/laravel/framework/pull/52486
* [11.x] Enhance DB inspection commands by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/52501
* [11.x] Constrain key when asserting database has a model by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/52464
* Add `between` to `AssertableJson` by [@rudashi](https://github.com/rudashi) in https://github.com/laravel/framework/pull/52479
* [11.x] Eager asset prefetching strategies for Vite by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52462
* [11.x] Support attributes in `app()->call()` by [@innocenzi](https://github.com/innocenzi) in https://github.com/laravel/framework/pull/52428
* [11.x] Applying `value` Function into the `$default` value of `transform` helper by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/52510
* [11.x] Enhanced typing for `HigherOrderCollectionProxy` by [@Voltra](https://github.com/Voltra) in https://github.com/laravel/framework/pull/52484
* [11.x] Add `expectsSearch()` assertion for testing prompts that use `search()` and `multisearch()` functions by [@JayBizzle](https://github.com/JayBizzle) in https://github.com/laravel/framework/pull/51669
* [11.x] revert #52510 which added a unneeded function call by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/52526

## [v11.20.0](https://github.com/laravel/framework/compare/v11.19.0...v11.20.0) - 2024-08-06

* Update testcase for `whereNone` method by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52351
* Improve `Lock->block` method by [@RedmarBakker](https://github.com/RedmarBakker) in https://github.com/laravel/framework/pull/52349
* [11.x] Use correct pluralization rules in trans_choice for fallback strings by [@stefanvdlugt](https://github.com/stefanvdlugt) in https://github.com/laravel/framework/pull/52343
* [11.x] Replace dead link in Security Policy by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/52338
* Add compatible query type to `Model::resolveRouteBindingQuery` by [@sebj54](https://github.com/sebj54) in https://github.com/laravel/framework/pull/52339
* [10.x] Fix `Factory::afterCreating` callable argument type by [@villfa](https://github.com/villfa) in https://github.com/laravel/framework/pull/52335
* [11.x] Remove undefined class PreventRequestsDuringMaintenance by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52322
* [11.x] Add middleware before sending request and dispatching events by [@eduance](https://github.com/eduance) in https://github.com/laravel/framework/pull/52323
* Add `collapseWithKeys` to `Collection` by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/52347
* [11.x] Inverse Fake Queue Interactions: `assertNotDeleted`, `assertNotFailed`, and `assertNotReleased` by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52320
* Add `deduplicate` to strings by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/52350
* [11.x] feat: make `Facade::isFake()` public by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52357
* [11.x] Ask about markdown template for notification command with no initial input by [@christophrumpel](https://github.com/christophrumpel) in https://github.com/laravel/framework/pull/52355
* [11.x] allow custom view path when making components by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/52219
* [11.x] chore: update to PHPStan Level 1 by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51956
* [11.x] Support passing default as named parameter in whenLoaded, whenAggregated, whenCounted by [@hn-seoai](https://github.com/hn-seoai) in https://github.com/laravel/framework/pull/51342
* Declare exceptions unreportable using the ShouldntReport interface by [@chrispage1](https://github.com/chrispage1) in https://github.com/laravel/framework/pull/52337
* [11.x] Enable extension of connection inspection methods by [@GromNaN](https://github.com/GromNaN) in https://github.com/laravel/framework/pull/52231
* [11.x] Add `whenExistsLoaded` method to conditionally include relationship existence attribute by [@CodeWithKyrian](https://github.com/CodeWithKyrian) in https://github.com/laravel/framework/pull/52295
* [11.x] Add `in()` and `inHidden()` functions to Context Stacks by [@lessevv](https://github.com/lessevv) in https://github.com/laravel/framework/pull/52346
* [11.x] Use Command::fail() method for single error messages by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52387
* [11.x] Rework `Context::stackContains` with Closures. by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52381
* [11.x] Allow enums to be passed to AssertableJson where methods by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/52360
* [11.x] Made `list` validation rule as array for "size rules" in validation messages by [@siarheipashkevich](https://github.com/siarheipashkevich) in https://github.com/laravel/framework/pull/52385
* [11.x] Add contextual attributes to resolve drivers by [@ziadoz](https://github.com/ziadoz) in https://github.com/laravel/framework/pull/52265
* [11.x] Fix docblocks for where(All|Any|None) query methods by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52388
* [10.x] backport #52204 by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52389
* [11.x] Fix Http Client Pool requests that have no response by [@andrewbroberg](https://github.com/andrewbroberg) in https://github.com/laravel/framework/pull/52393
* [11.x] Introduce MixFileNotFoundException for handling missing Mix files by [@Ex10Dios](https://github.com/Ex10Dios) in https://github.com/laravel/framework/pull/52400
* [10.x] In MySQL, harvest last insert ID immediately after query is executed by [@piurafunk](https://github.com/piurafunk) in https://github.com/laravel/framework/pull/52390

## [v11.19.0](https://github.com/laravel/framework/compare/v11.18.1...v11.19.0) - 2024-07-30

* fix [@return](https://github.com/return) typehint in Illuminate\Contracts\Process\InvokedProcess::wait method by [@mdmahbubhelal](https://github.com/mdmahbubhelal) in https://github.com/laravel/framework/pull/52304
* [11.x] Add php doc for ServiceProvider bindings and singletons properties by [@Anton5360](https://github.com/Anton5360) in https://github.com/laravel/framework/pull/52298
* [10.x] backport #52188 by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52293
* Update docblock to accept an Expression for whereLike methods by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/52299
* [11.x] Fix Bcrypt/Argon/Argon2I Hashers not checking database field for nullish value before checking hash compatibility by [@localpath](https://github.com/localpath) in https://github.com/laravel/framework/pull/52297
* [11.x] Method to trim '0' digits after decimal point of a given number by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52284
* [11.x] Add `whereNone` method to the query builder by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52260
* [11.x] Fix flat array parameter for relation upsert by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/52289
* [11.x] `assertSeeHtml`, `assertDontSeeHtml` and `assertSeeHtmlInOrder` testing methods by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52285
* [11.x] Fully qualify morph columns when using WHERE clauses by [@maartenpaauw](https://github.com/maartenpaauw) in https://github.com/laravel/framework/pull/52227
* [10.x] Fix runPaginationCountQuery not working properly for union queries by [@chinleung](https://github.com/chinleung) in https://github.com/laravel/framework/pull/52314
* [11.x] Add `assertExactJsonStructure` method by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52311
* [11.x] Add `withoutHeader()` test method by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52309
* [11.x] Widen typehints in base service provider by [@devfrey](https://github.com/devfrey) in https://github.com/laravel/framework/pull/52308
* [11.X] "Model::preventAccessingMissingAttributes()" Causes Exception During Pagination with ResourceCollection by [@Katalam](https://github.com/Katalam) in https://github.com/laravel/framework/pull/52305
* [11.x] Fixes through() relationship by [@leobeal](https://github.com/leobeal) in https://github.com/laravel/framework/pull/52318
* [11.x] Add new `success` Method to the Docblock of `Illuminate\Console\View\Components\Factory` by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/52310
* [11.x] Fix tests in wrong file by [@christophrumpel](https://github.com/christophrumpel) in https://github.com/laravel/framework/pull/52329

## [v11.18.1](https://github.com/laravel/framework/compare/v11.18.0...v11.18.1) - 2024-07-26

* [11.x] Fix variable typo at Terminating Event test by [@chu121su12](https://github.com/chu121su12) in https://github.com/laravel/framework/pull/52282
* Revert "[11.x] Declare bindings and singletons properties in Service Provider" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/52288

## [v11.18.0](https://github.com/laravel/framework/compare/v11.17.0...v11.18.0) - 2024-07-26

* Added completeWords flag to limit str method by [@itsmewes](https://github.com/itsmewes) in https://github.com/laravel/framework/pull/52245
* [11.x] Fix missing * in phpdoc by [@pb30](https://github.com/pb30) in https://github.com/laravel/framework/pull/52277
* [11.x] Fix SQLite schema dumps missing most tables by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/52275
* [11.x] Access dispatchedBatches via BusFake by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52270
* [11.x] Adds terminating event by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52259
* [11.x] Declare bindings and singletons properties in Service Provider by [@Anton5360](https://github.com/Anton5360) in https://github.com/laravel/framework/pull/52256
* [11.x] Fix explicit route binding for broadcast routes by [@ccharz](https://github.com/ccharz) in https://github.com/laravel/framework/pull/52280
* Revert "[11.x] Allow non-`ContextualAttribute` attributes to have an `after` callback" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/52281
* [11.x] Apply relation constraitns on upsert by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/52239

## [v11.17.0](https://github.com/laravel/framework/compare/v11.16.0...v11.17.0) - 2024-07-23

* [10.x] Fix PHP_CLI_SERVER_WORKERS warning by suppressing it by [@pelomedusa](https://github.com/pelomedusa) in https://github.com/laravel/framework/pull/52094
* [11.x] Use `Command::FAILURE` for `db:wipe` command by [@siarheipashkevich](https://github.com/siarheipashkevich) in https://github.com/laravel/framework/pull/52152
* [11.x] Update outdated config files by [@TENIOS](https://github.com/TENIOS) in https://github.com/laravel/framework/pull/52150
* [11.x] Fix 'pushProcessor method not found on LoggerInterface' error by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/52117
* [11.x] Use `Command::FAILURE` for `migrate:fresh` command by [@siarheipashkevich](https://github.com/siarheipashkevich) in https://github.com/laravel/framework/pull/52153
* Improve accuracy of `Collection::isEmpty` and `isNotEmpty` assertions by [@spawnia](https://github.com/spawnia) in https://github.com/laravel/framework/pull/52184
* [11.x] Fix return for ApplicationBuilder:: withCommandRouting method by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52181
* [11.x] Refactor: Replace get_called_class() with static::class for consistency by [@fernandokbs](https://github.com/fernandokbs) in https://github.com/laravel/framework/pull/52173
* [11.x] Improve readability of SQLite schema dumps by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/52172
* [11.x] Allow non-`ContextualAttribute` attributes to have an `after` callback by [@innocenzi](https://github.com/innocenzi) in https://github.com/laravel/framework/pull/52167
* [11.x] Ignoring column definitions when determining if a blueprint has a create command by [@kingsven](https://github.com/kingsven) in https://github.com/laravel/framework/pull/52177
* Add specify exceptions for exceptions handling the vite manifest file by [@SamuelWei](https://github.com/SamuelWei) in https://github.com/laravel/framework/pull/52169
* [11.x] fix: Model newCollection generics; feat: add HasCollection trait by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52171
* Add whereLike clause to query builder by [@einar-hansen](https://github.com/einar-hansen) in https://github.com/laravel/framework/pull/52147
* [11.x] Implement HasV7Uuids to use with MariaDB native uuid data type by [@Karem-sobhy](https://github.com/Karem-sobhy) in https://github.com/laravel/framework/pull/52029
* [11.x] Rename `Model::$collection` to `$collectionClass` by [@GromNaN](https://github.com/GromNaN) in https://github.com/laravel/framework/pull/52186
* [11.x] Allow microsecond travel by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52190
* [11.x] fix: Model/JsonResource::toJson should not fail with prior json errors by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52188
* [11.x] Fix SQL Server tests by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/52222
* [11.x] Inspect exception of assertThrows by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/52224
* [10.x]  Backport #51615  by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/52215
* [11.x] fix: Request::json() json errors when decoding empty string by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52204
* [11.x] Reduce the number of queries with `Cache::many` and `Cache::putMany` methods in  the database driver by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/52209
* Add method `QueryExecuted::toRawSql()` by [@spawnia](https://github.com/spawnia) in https://github.com/laravel/framework/pull/52192
* [11.x] Support lower version of Carbon by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/52233
* [11.x] Prevent bug (🐛) emoji on `Collection`/`Dumpable` `dd` method by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/52234

## [v11.16.0](https://github.com/laravel/framework/compare/v11.15.0...v11.16.0) - 2024-07-16

* [11.x] Fix expected/actual argument order for test assertion by [@riesjart](https://github.com/riesjart) in https://github.com/laravel/framework/pull/52084
* [11.x] Fix Moving Files in Sorted Order in vendor:publish by [@lmottasin](https://github.com/lmottasin) in https://github.com/laravel/framework/pull/52078
* [11.x] Fix docblock for \Illuminate\Validation\ClosureValidationRule::message() by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52077
* [11.x] Allow passing Enum casts to `Rule::enum()->only()` and `->except()` by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/52073
* [11.x] Include ConnectionException in ConnectionFailed events by [@alexbowers](https://github.com/alexbowers) in https://github.com/laravel/framework/pull/52069
* [11.x] Document returned array shape for sync methods by [@devfrey](https://github.com/devfrey) in https://github.com/laravel/framework/pull/52070
* [11.x] Add ability to configure SQLite `busy_timeout`, `journal_mode`, and `synchronous` pragmas by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/52052
* [11.x] Allow view content dependent mail callbacks by [@MaxTingle](https://github.com/MaxTingle) in https://github.com/laravel/framework/pull/51990
* Install Laravel Reverb version 1.0 instead of [@beta](https://github.com/beta) by [@lucasRolff](https://github.com/lucasRolff) in https://github.com/laravel/framework/pull/52096
* [11.x] fix: dont use web middleware on health endpoint by [@joshmanders](https://github.com/joshmanders) in https://github.com/laravel/framework/pull/52088
* [11.x] Add an option to replace configs recursively by [@felixbessler](https://github.com/felixbessler) in https://github.com/laravel/framework/pull/52087
* [11.x] Fixes generator tests by [@buismaarten](https://github.com/buismaarten) in https://github.com/laravel/framework/pull/52118
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52122
* [11.x] Fix SQLite schema dumps containing internal `sqlite_*` objects by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/52135
* Fix typo in `<!DOCTYPE>` declaration by [@TENIOS](https://github.com/TENIOS) in https://github.com/laravel/framework/pull/52134
* [11.x] fix: pluck generics by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52109
* [11.x] Include 'success' console component by [@lewislarsen](https://github.com/lewislarsen) in https://github.com/laravel/framework/pull/52112
* [11.x] Fix dumping migrations table with schema or prefixed name by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/52098
* Add `assertSentTo` shorthand by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/52083
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/52139
* [11.x] Update the docblock for the constructor of the FileFailedJobProvider class by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/52149
* [11.x] Update the docblock for the explode method of the Stringable class. by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/52148
* Refactor PHPStan configurations by [@TENIOS](https://github.com/TENIOS) in https://github.com/laravel/framework/pull/52145
* [11.x] Fix docblock for RoutingServiceProvider by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52144

## [v11.15.0](https://github.com/laravel/framework/compare/v11.14.0...v11.15.0) - 2024-07-09

* [10.x] Set previous exception on `HttpResponseException` by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51986
* [11.x] feat: add generics to Eloquent Builder and Relations by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51851
* add phpstan assertions to Collection isEmpty and isNotEmpty by [@johanrosenson](https://github.com/johanrosenson) in https://github.com/laravel/framework/pull/51998
* [11.x] Add support for mime types in Resend mail transport by [@jayanratna](https://github.com/jayanratna) in https://github.com/laravel/framework/pull/52006
* [11.x] feat: add virtual methods to SoftDeletes trait by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52001
* [11.x] Fix service container docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52000
* [10.x] Fix Http::retry so that throw is respected for call signature Http::retry([1,2], throw: false) by [@paulyoungnb](https://github.com/paulyoungnb) in https://github.com/laravel/framework/pull/52002
* [10.x] Set application_name and character set as PostgreSQL DSN string by [@sunaoka](https://github.com/sunaoka) in https://github.com/laravel/framework/pull/51985
* [11.x] Fix GeneratorCommand docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52014
* [11.x] Enhance database migrations by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51373
* [11.x] Run MySQL 9 Database Integration Tests nightly by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/52027
* [11.x] Enhance doc blocks of the Migrator class by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/52033
* [11.x] Use nullsafe operator for event dispatcher by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52024
* [11.x] Fix PasswordBroker constructor docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/52023
* [11.x] Add test `testMultiplyIsLazy` to ensure LazyCollection's `multiply` method's lazy behaviour by [@lmottasin](https://github.com/lmottasin) in https://github.com/laravel/framework/pull/52020
* [11.x] Allow `MultipleInstanceManager` to have studly creators by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/52030
* [11.x] Adds `$config` property to `MultipleInstanceManager` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/52028
* [11.x] fix: findOr and firstOr generics by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52037
* [11.x] Make `Router` `Tappable` by [@mabdullahsari](https://github.com/mabdullahsari) in https://github.com/laravel/framework/pull/52051
* [11.x] feat: improve Factory generics, add generics to HasFactory by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/52005
* [11.x] Ask About View Next To Name For Create Mail Command by [@christophrumpel](https://github.com/christophrumpel) in https://github.com/laravel/framework/pull/52057
* [11.x] Added [@throws](https://github.com/throws) docblock for `block` method for `LockTimeoutException` by [@siarheipashkevich](https://github.com/siarheipashkevich) in https://github.com/laravel/framework/pull/52063

## [v11.14.0](https://github.com/laravel/framework/compare/v11.13.0...v11.14.0) - 2024-07-02

* Adding Pest stubs to publish command by [@bartdenhoed](https://github.com/bartdenhoed) in https://github.com/laravel/framework/pull/51933
* [11.x] Added attempts() method to FakeJob by [@JamesFreeman](https://github.com/JamesFreeman) in https://github.com/laravel/framework/pull/51951
* [11.x] Run all Workflows on Ubuntu 24.04 by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/51946
* [11.x] Improve PHPDoc for `mapSpread` Method in `Arr` Class & Remove Warning from IDE by [@lmottasin](https://github.com/lmottasin) in https://github.com/laravel/framework/pull/51952
* Bump braces from 3.0.2 to 3.0.3 in /src/Illuminate/Foundation/resources/exceptions/renderer by [@dependabot](https://github.com/dependabot) in https://github.com/laravel/framework/pull/51955
* [11.x] Remove unreachable code in AssertableJsonString by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51943
* [11.x] Fix TestResponseAssert docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51942
* [11.x] feat: add more specific types and tests for helpers by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51938
* [11.x] Mark sensitive params with `SensitiveParameter` attribute by [@onlime](https://github.com/onlime) in https://github.com/laravel/framework/pull/51940
* [11.x] Adds support for Markdown extensions to the `Stringable` class. by [@lukeraymonddowning](https://github.com/lukeraymonddowning) in https://github.com/laravel/framework/pull/51932
* [11.x] Add secret method declaration to Components\Factory class by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51949
* [11.x] Run Workflows on Windows 2022 and with bash instead of powershell by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/51958
* [11.x] Fix duplicated return type PHPDoc by [@chu121su12](https://github.com/chu121su12) in https://github.com/laravel/framework/pull/51965
* [11.x] Fix test failure message by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/51974
* [11.x] Update tests to ensure mail Message implements the fluent interface pattern by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51969
* [11.x] Set previous exception on `HttpResponseException` by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51968
* [11.x] Fix typo in SupportCollectionTest by [@zbundy](https://github.com/zbundy) in https://github.com/laravel/framework/pull/51966
* [11.x] Improvements for the ServeCommand (add more loves & elevate DX) by [@sethsandaru](https://github.com/sethsandaru) in https://github.com/laravel/framework/pull/51957
* [11.x] Adds support for using castAsJson with a MariaDb connection by [@haniha](https://github.com/haniha) in https://github.com/laravel/framework/pull/51963
* [11.x] Add support for acting on attributes through container by [@innocenzi](https://github.com/innocenzi) in https://github.com/laravel/framework/pull/51934
* [11.x] Fix Component::resolveComponentsUsing test by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51988
* [11.x] Update composer.json files to provide PSR implementations by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51983
* [11.x] add queued closure type for soft delete events by [@hpiaia](https://github.com/hpiaia) in https://github.com/laravel/framework/pull/51982
* [11.x] Fix using container nesting to make the same 'abstract' in different context by [@guiqibusixin](https://github.com/guiqibusixin) in https://github.com/laravel/framework/pull/51989
* [11.x] Fix sync is running touch query twice by [@Tofandel](https://github.com/Tofandel) in https://github.com/laravel/framework/pull/51984

## [v11.13.0](https://github.com/laravel/framework/compare/v11.12.0...v11.13.0) - 2024-06-27

* [11.x] Add Support for Extensions in Str::markdown Method by [@tnylea](https://github.com/tnylea) in https://github.com/laravel/framework/pull/51907
* [11.x] Update config:show command by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51902
* [11.x] Fix console prompt docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51913
* [11.x] Fix prohibit docblock by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51916
* [11.x] Mark `$queue` as nullable by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/51912
* use `Macroable` trait on TokenGuard by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/51922
* [11.x] Update Command::fail() dockblock and tests by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51914
* Revert and add test by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/51924
* [11.x] Display view creation messages by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/51925
* [11.x] Introduce `Str::chopStart` and `Str::chopEnd` by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/51910
* feat: Add Number::pairs by [@hotmeteor](https://github.com/hotmeteor) in https://github.com/laravel/framework/pull/51904
* [11.x] Fixes escaping path via Process given commands as array by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51926
* [11.x] Make MultipleInstanceManager driver field customizable by [@princejohnsantillan](https://github.com/princejohnsantillan) in https://github.com/laravel/framework/pull/51905
* [11.x] Account for long strings on new Laravel error page by [@shengslogar](https://github.com/shengslogar) in https://github.com/laravel/framework/pull/51880

## [v11.12.0](https://github.com/laravel/framework/compare/v11.11.1...v11.12.0) - 2024-06-25
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

* [10.x] Fix typo in return comment of createSesTransport method by [@zds-s](https://github.com/zds-s) in https://github.com/laravel/framework/pull/51688
* [10.x] Fix collection shift less than one item by [@faissaloux](https://github.com/faissaloux) in https://github.com/laravel/framework/pull/51686
* [10.x] Turn `Enumerable unless()`  $callback parameter optional by [@faissaloux](https://github.com/faissaloux) in https://github.com/laravel/framework/pull/51701
* Revert "[10.x] Turn `Enumerable unless()`  $callback parameter optional" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/51707
<<<<<<< HEAD

## [v10.48.12](https://github.com/laravel/framework/compare/v10.48.11...v10.48.12) - 2024-05-28

* [10.x] Fix typo by [@Issei0804-ie](https://github.com/Issei0804-ie) in https://github.com/laravel/framework/pull/51535
* [10.x] Fix SQL Server detection in database store by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/51547
* [10.x] - Fix batch list loading in Horizon when serialization error by [@jeffortegad](https://github.com/jeffortegad) in https://github.com/laravel/framework/pull/51551
* [10.x] Fixes explicit route binding with `BackedEnum` by [@CAAHS](https://github.com/CAAHS) in https://github.com/laravel/framework/pull/51586

## [v10.48.11](https://github.com/laravel/framework/compare/v10.48.10...v10.48.11) - 2024-05-21

* [10.x] Backport: Fix SesV2Transport to use correct `EmailTags` argument by [@Tietew](https://github.com/Tietew) in https://github.com/laravel/framework/pull/51352
* [10.x] Fix PHPDoc typo by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/51390
* [10.x] Fix `apa` on non ASCII characters by [@faissaloux](https://github.com/faissaloux) in https://github.com/laravel/framework/pull/51428
* [10.x] Fixes view engine resolvers leaking memory by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/51450
* [10.x] Do not use `app()` Foundation helper on `ViewServiceProvider` by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/51522

## [v10.48.10](https://github.com/laravel/framework/compare/v10.48.9...v10.48.10) - 2024-04-30

* [10.x] Fix typo in signed URL tampering tests by @Krisell in https://github.com/laravel/framework/pull/51238
* [10.x] Add "Server has gone away" to DetectsLostConnection by @Jubeki in https://github.com/laravel/framework/pull/51241
* [10.x] Fix support for the LARAVEL_STORAGE_PATH env var (#51238) by @dunglas in https://github.com/laravel/framework/pull/51243

## [v10.48.9](https://github.com/laravel/framework/compare/v10.48.8...v10.48.9) - 2024-04-23

* [10.x] Binding order is incorrect when using cursor paginate with multiple unions with a where by [@thijsvdanker](https://github.com/thijsvdanker) in https://github.com/laravel/framework/pull/50884
* [10.x] Fix cursor paginate with union and column alias by [@thijsvdanker](https://github.com/thijsvdanker) in https://github.com/laravel/framework/pull/50882
* [10.x] Address Null Parameter Deprecations in UrlGenerator by [@aldobarr](https://github.com/aldobarr) in https://github.com/laravel/framework/pull/51148

## [v10.48.8](https://github.com/laravel/framework/compare/v10.48.7...v10.48.8) - 2024-04-17

* [10.x] Fix error when using `orderByRaw()` in query before using `cursorPaginate()` by @axlon in https://github.com/laravel/framework/pull/51023
* [10.x] Database layer fixes by @saadsidqui in https://github.com/laravel/framework/pull/49787

## [v10.48.7](https://github.com/laravel/framework/compare/v10.48.6...v10.48.7) - 2024-04-10

* Fix more query builder methods by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/commit/95ef230339b15321493a08327f250c0760c95376

## [v10.48.6](https://github.com/laravel/framework/compare/v10.48.5...v10.48.6) - 2024-04-10

* [10.x] Added eachById and chunkByIdDesc to BelongsToMany by [@lonnylot](https://github.com/lonnylot) in https://github.com/laravel/framework/pull/50991

## [v10.48.5](https://github.com/laravel/framework/compare/v10.48.4...v10.48.5) - 2024-04-09

* [10.x] Prevent Redis connection error report flood on queue worker by [@kasus](https://github.com/kasus) in https://github.com/laravel/framework/pull/50812
* [10.x] Laravel 10x optional withSize for hasTable by [@apspan](https://github.com/apspan) in https://github.com/laravel/framework/pull/50888
* [10.x] Add `serializeAndRestore()` to `NotificationFake` by [@dbpolito](https://github.com/dbpolito) in https://github.com/laravel/framework/pull/50935

## [v10.48.4](https://github.com/laravel/framework/compare/v10.48.3...v10.48.4) - 2024-03-21

* [10.x] Fix `Collection::concat()` return type by @axlon in https://github.com/laravel/framework/pull/50669
* [10.x] Fix command alias registration and usage by @crynobone in https://github.com/laravel/framework/pull/50695

## [v10.48.3](https://github.com/laravel/framework/compare/v10.48.2...v10.48.3) - 2024-03-15

- Re-tag version

## [v10.48.2](https://github.com/laravel/framework/compare/v10.48.1...v10.48.2) - 2024-03-12
=======
* [10.x] Fixes unable to call another command as a initialized instance of `Command` class by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51824
* [10.x] fix handle `shift()` on an empty collection by [@Treggats](https://github.com/Treggats) in https://github.com/laravel/framework/pull/51841
* [10.x] Ensure`schema:dump` will dump the migrations table only if it exists by [@NickSdot](https://github.com/NickSdot) in https://github.com/laravel/framework/pull/51827
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51847
* [11.x] Test application storage path by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51848
* [11.x] Fix PHP_MAXPATHLEN check for strings slightly smaller then PHP_MAXPATHLEN by [@joshuaruesweg](https://github.com/joshuaruesweg) in https://github.com/laravel/framework/pull/51850
* [11.x] Improve Bus::assertNothingDispatched(), Event::assertNothingDispatched(), Mail::assertNothingSent(), Notification::assertNothingSent() error messages by [@macbookandrew](https://github.com/macbookandrew) in https://github.com/laravel/framework/pull/51846
* [11.x] Update error page to show GET <path> by [@chu121su12](https://github.com/chu121su12) in https://github.com/laravel/framework/pull/51837
* [11.x] Remove deprecated `type` attributes in the exception renderer by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/51866
* [11.x] Import classes in the exception templates by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/51863
* [11.x] Collection before/after optimization by [@bert-w](https://github.com/bert-w) in https://github.com/laravel/framework/pull/51876
* [11.x] Add multiply to collection by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/51870
* [11.x] Add addEventDiscoveryPaths to EventServiceProvider by [@ya-cha](https://github.com/ya-cha) in https://github.com/laravel/framework/pull/51896
* [11.x] Fix validation attributes when translations are empty or missing by [@owenandrews](https://github.com/owenandrews) in https://github.com/laravel/framework/pull/51890
* [11.x] feat: add generics to tap() helper by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51881

## [v11.11.1](https://github.com/laravel/framework/compare/v11.11.0...v11.11.1) - 2024-06-20

* [11.x] Remove useless variable assignment by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51838
* [11.x] Fix event dispatcher typing in cache repository by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/51835
* Chop PHP extension when passed to `make` commands by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/51842
* [11.x] Simplify `.php` extension chopping in `getNameInput` by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/51843
* [11.x] fix: improve performance and robustness of Relation::getMorphAlias() by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51845
* Revert "[11.x] Change scope for `afterCreating` and `afterMaking` callbacks" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/51858

## [v11.11.0](https://github.com/laravel/framework/compare/v11.10.0...v11.11.0) - 2024-06-18

* [11.x] Add `get`, `write` and `forget` cache events by [@stayallive](https://github.com/stayallive) in https://github.com/laravel/framework/pull/51560
* [11.x] Add test for Arr::sortRecursiveDesc() method. by [@lmottasin](https://github.com/lmottasin) in https://github.com/laravel/framework/pull/51716
* [11.x] Fix missing table name in `db:table` command by [@benholmen](https://github.com/benholmen) in https://github.com/laravel/framework/pull/51710
* Ensure files exist for `install:broadcasting` by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/51719
* [11.x] Restore exceptions/errors to test assertion failure messages by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/51725
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51723
* [11.x] Add tests for accessible and take method by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51724
* Increment the `totalJobs` property for the `BatchFake` when add some jobs by [@yankewei](https://github.com/yankewei) in https://github.com/laravel/framework/pull/51742
* [11.x] Give session ID retrieval the Laravel treatment by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/51732
* [11.x] Fix the chunk method to an integer type in the splitIn method by [@rookiexxk](https://github.com/rookiexxk) in https://github.com/laravel/framework/pull/51733
* Update:update name method and doc by [@mehdi-fathi](https://github.com/mehdi-fathi) in https://github.com/laravel/framework/pull/51744
* [11.x] Fixes `config:publish` with `dontMergeFrameworkConfiguration()` set to `true` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51751
* Updated phpdoc for Builder::from() by [@boris-glumpler](https://github.com/boris-glumpler) in https://github.com/laravel/framework/pull/51767
* [11.x] Fixed pop on default Beankstalkd queue when not specifically added by [@rinocs](https://github.com/rinocs) in https://github.com/laravel/framework/pull/51759
* [11.x] Add `before` and `after` methods to Collection by [@avosalmon](https://github.com/avosalmon) in https://github.com/laravel/framework/pull/51752
* [11.x] Change scope for `afterCreating` and `afterMaking` callbacks by [@jacob418](https://github.com/jacob418) in https://github.com/laravel/framework/pull/51772
* Use numeric literal separator in file rule validation by [@AmirKhalifehSoltani](https://github.com/AmirKhalifehSoltani) in https://github.com/laravel/framework/pull/51781
* [11.x] Import Model class for Renderer\Exception by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51778
* [11.x] About command improvement by [@AmirKhalifehSoltani](https://github.com/AmirKhalifehSoltani) in https://github.com/laravel/framework/pull/51791
* [11.x] Test abort behavior by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51800
* [11.x] Container shares fixed values/initialized instances instead of singleton closure resolutions by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51804
* [11.x] Fix altering a table that has a column with `default 0` on SQLite by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51803
* [11.x] Fix typo in `VendorPublishCommand` by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/51812
* [11.x] Fix some typos in the tests by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/51811
* [11.x] Add unprocessableContent and update unprocessableEntity by [@dwightwatson](https://github.com/dwightwatson) in https://github.com/laravel/framework/pull/51815
* [11.x] Improve Queue::assertNothingPushed() error message by [@SjorsO](https://github.com/SjorsO) in https://github.com/laravel/framework/pull/51814
* [11.x] Add `Relation::getMorphAlias()` by [@pxlrbt](https://github.com/pxlrbt) in https://github.com/laravel/framework/pull/51809
* [11.x] Support third-party relations in `model:show` command by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/51807
* [11.x] Fix nested rules custom attribute names by [@owenandrews](https://github.com/owenandrews) in https://github.com/laravel/framework/pull/51805
* [11.x] Fix docblock of \Illuminate\Http\Response by [@seriquynh](https://github.com/seriquynh) in https://github.com/laravel/framework/pull/51823

## [v11.10.0](https://github.com/laravel/framework/compare/v11.9.2...v11.10.0) - 2024-06-04

* [11.x] Fix typo in filename by [@Henridv](https://github.com/Henridv) in https://github.com/laravel/framework/pull/51643
* [11.x] Add Vite auto refresh to error page by [@riasvdv](https://github.com/riasvdv) in https://github.com/laravel/framework/pull/51635
* [11.x] Add test for join_paths by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/51621
* [11.x] Preload base options for missing config files by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/51619
* [11.x] Add option to disable merging of base configuration by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/51579
* [11.x] Allow callback to be passed to `updateOrInsert()` to pass different `$values` if the record already exists by [@Markshall](https://github.com/Markshall) in https://github.com/laravel/framework/pull/51566
* [11.x] Fix `join_paths` issue with segment '0' by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/51649
* [11.x] Remove extra double quote in the error page by [@nicolus](https://github.com/nicolus) in https://github.com/laravel/framework/pull/51670
* [11.x] Add tests to improve test coverage for `HtmlString` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51666
* [11.x] Add tests to improve test coverage for `Arr::whereNotNull` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51661
* [11.x] Add tests for FileSystem class by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/51654
* [11.x] Update OptimizeClearCommand.php by [@nathanpurcell](https://github.com/nathanpurcell) in https://github.com/laravel/framework/pull/51667
* [11.x] Support soft deleted models when using explicit route model binding by [@gbradley](https://github.com/gbradley) in https://github.com/laravel/framework/pull/51651
* [11.x] Add tests for `Arr::divide` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51673
* [11.x] Prune should be a flag option by [@riasvdv](https://github.com/riasvdv) in https://github.com/laravel/framework/pull/51694
* [11.x] Avoid using Laravel new error page if `app.debug` changes to `true` at runtime by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51705

## [v11.9.2](https://github.com/laravel/framework/compare/v11.9.1...v11.9.2) - 2024-05-30

* [11.x] Fix new exception renderer compatibility with closure middleware by [@ifox](https://github.com/ifox) in https://github.com/laravel/framework/pull/51614
* [11.x] Fix double-quoted string literals on SQLite by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51615
* [11.x] Allow setting Resend api key in mailer specific config by [@riasvdv](https://github.com/riasvdv) in https://github.com/laravel/framework/pull/51618
* [11.x] Fix only number as session key will result in numbered session keys by [@Katalam](https://github.com/Katalam) in https://github.com/laravel/framework/pull/51611

## [v11.9.1](https://github.com/laravel/framework/compare/v11.9.0...v11.9.1) - 2024-05-28

* [11.x] Fixes missing route context by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/51602

## [v11.9.0](https://github.com/laravel/framework/compare/v11.8.0...v11.9.0) - 2024-05-28

* [11.x] Optimize boostrap time by using hashtable to store providers by [@sarven](https://github.com/sarven) in https://github.com/laravel/framework/pull/51343
* [11.x] Prevent destructive commands from running by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/51376
* [11.x] renamed left `has` to `contains` by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/51532
* [10.x] Fix typo by [@Issei0804-ie](https://github.com/Issei0804-ie) in https://github.com/laravel/framework/pull/51535
* [11.x] Fixes doc block in Timebox.php by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51537
* [11.x] Rename test function to match prohibit action by [@faissaloux](https://github.com/faissaloux) in https://github.com/laravel/framework/pull/51534
* [11.x] Fix LazilyRefreshDatabase when using Laravel BrowserKit Testing by [@MaxGiting](https://github.com/MaxGiting) in https://github.com/laravel/framework/pull/51538
* [10.x] Fix SQL Server detection in database store by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/51547
* [11.x] Display test creation messages by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/51546
* [11.x] Detect Cockroach DB connection loss by [@saschaglo](https://github.com/saschaglo) in https://github.com/laravel/framework/pull/51559
* [11.x] Fix type tests by [@stayallive](https://github.com/stayallive) in https://github.com/laravel/framework/pull/51558
* [11.x] Add `withoutDelay()` to the `Queueable` trait by [@KennedyTedesco](https://github.com/KennedyTedesco) in https://github.com/laravel/framework/pull/51555
* [11.x] Add an option to remove the original environment file after encrypting by [@riasvdv](https://github.com/riasvdv) in https://github.com/laravel/framework/pull/51556
* [10.x] - Fix batch list loading in Horizon when serialization error by [@jeffortegad](https://github.com/jeffortegad) in https://github.com/laravel/framework/pull/51551
* [10.x] Fixes explicit route binding with `BackedEnum` by [@CAAHS](https://github.com/CAAHS) in https://github.com/laravel/framework/pull/51586
* [11.x] Add `Macroable` to `PendingCommand` by [@PerryvanderMeer](https://github.com/PerryvanderMeer) in https://github.com/laravel/framework/pull/51572
* [11.x] Improves errors by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/51261
* [11.x] Add RELEASE.md to .gitattributes by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/51598
* [11.x] Fixes exception rendering by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/51587

## [v11.8.0](https://github.com/laravel/framework/compare/v11.7.0...v11.8.0) - 2024-05-21

* [11.x] Update PendingRequest.php by [@foremtehan](https://github.com/foremtehan) in https://github.com/laravel/framework/pull/51338
* Add unshift method to Collection by [@timkelty](https://github.com/timkelty) in https://github.com/laravel/framework/pull/51344
* [11.x] Synchronizing cache configuration file with updated laravel v11.0.7 by [@dvlpr91](https://github.com/dvlpr91) in https://github.com/laravel/framework/pull/51336
* [11.x] Utilize `null-safe` operator instead of conditional check by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51328
* [11.x] Add the events to be displayed on the model:show command by [@WendellAdriel](https://github.com/WendellAdriel) in https://github.com/laravel/framework/pull/51324
* [11.x] fix: remove use of Redis::COMPRESSION_ZSTD_MIN by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51346
* [10.x] Backport: Fix SesV2Transport to use correct `EmailTags` argument by [@Tietew](https://github.com/Tietew) in https://github.com/laravel/framework/pull/51352
* [11.x] feat: use phpredis 6 in ci by [@calebdw](https://github.com/calebdw) in https://github.com/laravel/framework/pull/51347
* [11.x] create new "has" validation rule by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/51348
* [11.x] Add support for previous apps keys in signed URL verification by [@Krisell](https://github.com/Krisell) in https://github.com/laravel/framework/pull/51222
* [11.x] Allow setting exit code in migrate:status --pending by [@brecht-vermeersch](https://github.com/brecht-vermeersch) in https://github.com/laravel/framework/pull/51341
* [11.x] Fix array rule typehint by [@erik-perri](https://github.com/erik-perri) in https://github.com/laravel/framework/pull/51372
* [11.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51365
* [10.x] Fix PHPDoc typo by [@staudenmeir](https://github.com/staudenmeir) in https://github.com/laravel/framework/pull/51390
* [11.x] Fix return type hint of resolveRouteBindingQuery by [@philbates35](https://github.com/philbates35) in https://github.com/laravel/framework/pull/51392
* [11.x] Allow adding array or string for web and api routes in bootstrap/app.php by [@mrthito](https://github.com/mrthito) in https://github.com/laravel/framework/pull/51356
* [ 11.x ] Adds ability to manually fail a command from outside the handle() method by [@ProjektGopher](https://github.com/ProjektGopher) in https://github.com/laravel/framework/pull/51435
* [10.x] Fix `apa` on non ASCII characters by [@faissaloux](https://github.com/faissaloux) in https://github.com/laravel/framework/pull/51428
* [11.x] Compare lowercased column names in getColumnType by [@chady](https://github.com/chady) in https://github.com/laravel/framework/pull/51431
* [11.x] Use contracts instead of concrete type for `resolveRouteBindingQuery()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51425
* [11.x] Set the value of `$this` in macro closures by [@simonwelsh](https://github.com/simonwelsh) in https://github.com/laravel/framework/pull/51401
* [11.x] Add missing roundrobin transport driver config by [@u01jmg3](https://github.com/u01jmg3) in https://github.com/laravel/framework/pull/51400
* [11.x] Remove unused namespace by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51436
* [11.x] Fixes doc block in `Connector.php` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51440
* [10.x] Fixes view engine resolvers leaking memory by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/51450
* [11.x] Add some tests to `SupportStrTest` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51437
* [11.x] Add isCurrentlyOwnedBy function to lock by [@gazben](https://github.com/gazben) in https://github.com/laravel/framework/pull/51393
* [11.x] Collection average/avg optimization by [@bert-w](https://github.com/bert-w) in https://github.com/laravel/framework/pull/51512
* [11.x] Introduce `MixManifestNotFoundException` for handling missing Mix manifests by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/51502
* [11.x] MailMakeCommand: Add new `--view` option by [@ryangjchandler](https://github.com/ryangjchandler) in https://github.com/laravel/framework/pull/51411
* [11.x] Replace all backed enums with values when building URLs by [@stefanvdlugt](https://github.com/stefanvdlugt) in https://github.com/laravel/framework/pull/51524
* [10.x] Do not use `app()` Foundation helper on `ViewServiceProvider` by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/51522
* Fixes explicit route binding with `BackedEnum` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/51525
* [11.x] Add query method to UrlGenerator contract docblock by [@hjanos-bc](https://github.com/hjanos-bc) in https://github.com/laravel/framework/pull/51515

## [v11.7.0](https://github.com/laravel/framework/compare/v11.6.0...v11.7.0) - 2024-05-07

* [11.x] Fix SesV2Transport to use correct `EmailTags` argument by @Tietew in https://github.com/laravel/framework/pull/51265
* [11.x] Add Databases nightly workflow by @Jubeki in https://github.com/laravel/framework/pull/51218
* [11.x] update "min" and "max" rule comments by @browner12 in https://github.com/laravel/framework/pull/51274
* [11.x] Fix namespace and improvement PSR in `ClassMakeCommandTest.php` by @saMahmoudzadeh in https://github.com/laravel/framework/pull/51280
* [11.x] improvement test coverage for view components. by @saMahmoudzadeh in https://github.com/laravel/framework/pull/51271
* [11.x] Introduce method `Rule::array()` by @Jacobs63 in https://github.com/laravel/framework/pull/51250
* [11.x] Fix docblock for collection pluck methods by @SanderMuller in https://github.com/laravel/framework/pull/51295
* [11.x] Add tests for handling non-baked enum and empty string requests by @hrant1020 in https://github.com/laravel/framework/pull/51289
* blank and filled now support stringable by @lava83 in https://github.com/laravel/framework/pull/51300
* [11.x] Fix ratio validation for high ratio images by @ahmedbally in https://github.com/laravel/framework/pull/51296
* [11.x] Add int|float support to e method by @trippo in https://github.com/laravel/framework/pull/51314
* [11.x] Add release notes by @driesvints in https://github.com/laravel/framework/pull/51310
* [11.x] `Stringable` is also an interface of symfony by @lava83 in https://github.com/laravel/framework/pull/51309
* [11.x] Add some tests and improvement test coverage for `Str::camel` by @saMahmoudzadeh in https://github.com/laravel/framework/pull/51308
* [11.x] Using the `??` Operator (Null Coalescing Operator)  by @saMahmoudzadeh in https://github.com/laravel/framework/pull/51305
* [11.x] Add ability to override the default loading cached Routes for application by @ahmedabdel3al in https://github.com/laravel/framework/pull/51292
* [11.x] Add ->whereJsonOverlaps() for mysql by @parkourben99 in https://github.com/laravel/framework/pull/51288
* [11.x] Add `InteractsWithInput` methods to `ValidatedInput` by @aydinfatih in https://github.com/laravel/framework/pull/51316
* [11.x] Adding PasswordResetLinkSent event by @Muffinman in https://github.com/laravel/framework/pull/51253

## [v11.6.0](https://github.com/laravel/framework/compare/v11.5.0...v11.6.0) - 2024-04-30

* [11.x] github: mariadb database healthcheck+naming by @grooverdan in https://github.com/laravel/framework/pull/51192
* Add support for PHPUnit 11.1 by @crynobone in https://github.com/laravel/framework/pull/51197
* Move whitespace in front of verbatim block in Blade templates by @Sjord in https://github.com/laravel/framework/pull/51195
* [11.x] Trim trailing `?` from generated URL without query params by @onlime in https://github.com/laravel/framework/pull/51191
* Add some tests on route:list sort command by @fgaroby in https://github.com/laravel/framework/pull/51202
* [10.x] Improve releases flow by @driesvints in https://github.com/laravel/framework/pull/51213
* Fix return types of `firstWhere` and `first` of `BelongsToMany` and `HasManyThrough` by @SanderMuller in https://github.com/laravel/framework/pull/51219
* [10.x] Fix typo in signed URL tampering tests by @Krisell in https://github.com/laravel/framework/pull/51238
* [10.x] Add "Server has gone away" to DetectsLostConnection by @Jubeki in https://github.com/laravel/framework/pull/51241
* [11.x] Add  some tests in `SupportStrTest` class  by @saMahmoudzadeh in https://github.com/laravel/framework/pull/51235
* [10.x] Fix support for the LARAVEL_STORAGE_PATH env var (#51238) by @dunglas in https://github.com/laravel/framework/pull/51243
* [11.x] Add replaceable tags to translations by @LegendEffects in https://github.com/laravel/framework/pull/51190
* [10.x] fix: Factory::createMany creating n^2 records by @calebdw in https://github.com/laravel/framework/pull/51225

## [v11.5.0](https://github.com/laravel/framework/compare/v11.4.0...v11.5.0) - 2024-04-23

* [11.x] Add namespace for `make:trait` and `make:interface` command by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/51083
* [11.x] Ability to generate URL's with query params by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/51075
* [11.x] Adds anonymous broadcasting by [@joedixon](https://github.com/joedixon) in https://github.com/laravel/framework/pull/51082
* [10.x] Binding order is incorrect when using cursor paginate with multiple unions with a where by [@thijsvdanker](https://github.com/thijsvdanker) in https://github.com/laravel/framework/pull/50884
* [10.x] Fix cursor paginate with union and column alias by [@thijsvdanker](https://github.com/thijsvdanker) in https://github.com/laravel/framework/pull/50882
* [11.x] Fix typo in tests by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/51093
* Fix argument type in `Cache\Store` by [@GromNaN](https://github.com/GromNaN) in https://github.com/laravel/framework/pull/51100
* Correct comment's grammatical and semantic errors by [@javadihugo](https://github.com/javadihugo) in https://github.com/laravel/framework/pull/51101
* [11.x] Replace matches typehint fix by [@henzeb](https://github.com/henzeb) in https://github.com/laravel/framework/pull/51095
* [11.x] Exclude `laravel_through_key` when replicating model, fixes #51097 by [@levu42](https://github.com/levu42) in https://github.com/laravel/framework/pull/51098
* [11.x] Add enum types to static Rule methods by [@erik-perri](https://github.com/erik-perri) in https://github.com/laravel/framework/pull/51090
* [11.x] Add decrement method to the rate limiter class by [@AlexJump24](https://github.com/AlexJump24) in https://github.com/laravel/framework/pull/51102
* [11.x] Remove dead code by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/51106
* [11.x] Fix support for other hashing implementations when using `hashed` cast by [@j3j5](https://github.com/j3j5) in https://github.com/laravel/framework/pull/51112
* Revert "[11.x] Adds support for `int` backed enums to implicit `Enum` route binding" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/51119
* [11.x] Add support for enums in `whereIn` route constraints by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/51121
* Clarify that \Illuminate\Http\Request::replace replace all input values by [@treyssatvincent](https://github.com/treyssatvincent) in https://github.com/laravel/framework/pull/51123
* [11.x] Fix db:show's --counts option by [@xuchunyang](https://github.com/xuchunyang) in https://github.com/laravel/framework/pull/51140
* Update RuntimeException message when no data has been found by [@mikemeijer](https://github.com/mikemeijer) in https://github.com/laravel/framework/pull/51133
* [11] Update DetectsLostConnections.php by [@it-can](https://github.com/it-can) in https://github.com/laravel/framework/pull/51127
* [11.x] Reset connection after migrate for FreshCommand by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/51167
* [10.x] Address Null Parameter Deprecations in UrlGenerator by [@aldobarr](https://github.com/aldobarr) in https://github.com/laravel/framework/pull/51148
* [11.x] Provide context for NestedRules by [@imahmood](https://github.com/imahmood) in https://github.com/laravel/framework/pull/51160
* [11.x] Fix renaming columns with `NULL` as default on legacy MariaDB/MySQL by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/51177
* [11.x] Supercharge Blade by [@assertchris](https://github.com/assertchris) in https://github.com/laravel/framework/pull/51143
* [11.x] Allow implicit binding to have optional backed enums by [@Neol3108](https://github.com/Neol3108) in https://github.com/laravel/framework/pull/51178
* [11.x] Blade Component Loop Speed Improvement by [@lonnylot](https://github.com/lonnylot) in https://github.com/laravel/framework/pull/51158
* [11.x] Fix normalizedNameCache by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/51185
* [11.x] GenericUser use `getAuthPasswordName` instead of hardcoded column name by [@Daniel-H123](https://github.com/Daniel-H123) in https://github.com/laravel/framework/pull/51186

## [v11.4.0](https://github.com/laravel/framework/compare/v11.3.1...v11.4.0) - 2024-04-16

* [11.x] Apc Cache - Remove long-time gone apc_* functions by [@serpentblade](https://github.com/serpentblade) in https://github.com/laravel/framework/pull/51010
* [11.x] Allowing Usage of Livewire Wire Boolean Style Directives by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/51007
* [11.x] Introduces `Exceptions` facade by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50704
* [11.x] `afterQuery` hook by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/50587
* Fix computed columns mapping to wrong tables by [@maddhatter](https://github.com/maddhatter) in https://github.com/laravel/framework/pull/51009
* [11.x] improvement test for string title by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51015
* [11.x] Fix failing `afterQuery` method tests when using sql server by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/51016
* [11.x] Fix: Apply database connection  before checking if the repository exist by [@sjspereira](https://github.com/sjspereira) in https://github.com/laravel/framework/pull/51021
* [10.x] Fix error when using `orderByRaw()` in query before using `cursorPaginate()` by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/51023
* [11.x] Add RequiredIfDeclined validation rule by [@timmydhooghe](https://github.com/timmydhooghe) in https://github.com/laravel/framework/pull/51030
* [11.x] Adds support for enums on `mapInto` collection method by [@lukeraymonddowning](https://github.com/lukeraymonddowning) in https://github.com/laravel/framework/pull/51027
* [11.x] Fix prompt fallback return value when using numeric keys by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/50995
* [11.x] Adds support for `int` backed enums to implicit `Enum` route binding by [@monurakkaya](https://github.com/monurakkaya) in https://github.com/laravel/framework/pull/51029
* [11.x] Configuration to disable events on Cache Repository by [@serpentblade](https://github.com/serpentblade) in https://github.com/laravel/framework/pull/51032
* Revert "[11.x] Name of job set by displayName() must be honoured by S… by [@RobertBoes](https://github.com/RobertBoes) in https://github.com/laravel/framework/pull/51034
* chore: fix some typos in comments by [@laterlaugh](https://github.com/laterlaugh) in https://github.com/laravel/framework/pull/51037
* Name of job set by displayName() must be honoured by Schedule by [@SCIF](https://github.com/SCIF) in https://github.com/laravel/framework/pull/51038
* Fix more typos by [@szepeviktor](https://github.com/szepeviktor) in https://github.com/laravel/framework/pull/51039
* [11.x] Fix some doc blocks by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/51043
* [11.x] Add [@throws](https://github.com/throws) ConnectionException tag on Http methods for IDE support by [@masoudtajer](https://github.com/masoudtajer) in https://github.com/laravel/framework/pull/51066
* [11.x] Add Prompts `textarea` fallback for tests and add assertion tests by [@lioneaglesolutions](https://github.com/lioneaglesolutions) in https://github.com/laravel/framework/pull/51055
* Validate MAC per key by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/51063
* [11.x] Add `throttle` method to `LazyCollection` by [@JosephSilber](https://github.com/JosephSilber) in https://github.com/laravel/framework/pull/51060
* [11.x] Pass decay seconds or minutes like hour and day by [@jimmypuckett](https://github.com/jimmypuckett) in https://github.com/laravel/framework/pull/51054
* [11.x] Consider after_commit config in SyncQueue by [@hansnn](https://github.com/hansnn) in https://github.com/laravel/framework/pull/51071
* [10.x] Database layer fixes by [@saadsidqui](https://github.com/saadsidqui) in https://github.com/laravel/framework/pull/49787
* [11.x] Fix context helper always requiring `$key` value by [@nikspyratos](https://github.com/nikspyratos) in https://github.com/laravel/framework/pull/51080
* [11.x] Fix `expectsChoice` assertion with optional `multiselect` prompts. by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/51078

## [v11.3.1](https://github.com/laravel/framework/compare/v11.3.0...v11.3.1) - 2024-04-10

* [11.x] Name of job set by displayName() must be honoured by Schedule by [@SCIF](https://github.com/SCIF) in https://github.com/laravel/framework/pull/50973
* Add Conditionable trait to Testing\PendingCommand.php by [@tobz-nz](https://github.com/tobz-nz) in https://github.com/laravel/framework/pull/50988
* Allow sorting of route:list by multiple column/factors using a comma by [@fredbradley](https://github.com/fredbradley) in https://github.com/laravel/framework/pull/50998
* [10.x] Added eachById and chunkByIdDesc to BelongsToMany by [@lonnylot](https://github.com/lonnylot) in https://github.com/laravel/framework/pull/50991

## [v11.3.0](https://github.com/laravel/framework/compare/v11.2.0...v11.3.0) - 2024-04-09

* [10.x] Prevent Redis connection error report flood on queue worker by [@kasus](https://github.com/kasus) in https://github.com/laravel/framework/pull/50812
* [11.x] Optimize SetCacheHeaders to ensure error responses aren't cached by [@MinaWilliam](https://github.com/MinaWilliam) in https://github.com/laravel/framework/pull/50903
* [11.x] Add session `hasAny` method by [@mahmoudmohamedramadan](https://github.com/mahmoudmohamedramadan) in https://github.com/laravel/framework/pull/50897
* [11.x] Add option to report throttled exception in ThrottlesExceptions middleware by [@JaZo](https://github.com/JaZo) in https://github.com/laravel/framework/pull/50896
* [11.x] Add DeleteWhenMissingModels attribute by [@Neol3108](https://github.com/Neol3108) in https://github.com/laravel/framework/pull/50890
* [11.x] Allow customizing TrimStrings::$except by [@grohiro](https://github.com/grohiro) in https://github.com/laravel/framework/pull/50901
* [11.x] Add pull methods to Context by [@renegeuze](https://github.com/renegeuze) in https://github.com/laravel/framework/pull/50904
* [11.x] Remove redundant code from MariaDbGrammar by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/50907
* [11.x] Explicit nullable parameter declarations to fix PHP 8.4 deprecation by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/50922
* [11.x] Add setters to cache stores by [@stancl](https://github.com/stancl) in https://github.com/laravel/framework/pull/50912
* [10.x] Laravel 10x optional withSize for hasTable by [@apspan](https://github.com/apspan) in https://github.com/laravel/framework/pull/50888
* [11.x] Fix prompting for missing array arguments on artisan command by [@macocci7](https://github.com/macocci7) in https://github.com/laravel/framework/pull/50850
* [11.x] Add strict-mode safe hasAttribute method to Eloquent by [@mateusjatenee](https://github.com/mateusjatenee) in https://github.com/laravel/framework/pull/50909
* [11.x] add function to get faked events by [@browner12](https://github.com/browner12) in https://github.com/laravel/framework/pull/50905
* [11.x] `retry` func - catch "Throwable" instead of Exception by [@sethsandaru](https://github.com/sethsandaru) in https://github.com/laravel/framework/pull/50944
* chore: remove repetitive words by [@findseat](https://github.com/findseat) in https://github.com/laravel/framework/pull/50943
* [10.x] Add `serializeAndRestore()` to `NotificationFake` by [@dbpolito](https://github.com/dbpolito) in https://github.com/laravel/framework/pull/50935
* [11.x] Prevent crash when handling ConnectionException in HttpClient retry logic by [@shinsenter](https://github.com/shinsenter) in https://github.com/laravel/framework/pull/50955
* [11.x] Remove unknown parameters by [@naopusyu](https://github.com/naopusyu) in https://github.com/laravel/framework/pull/50965
* [11.x] Fixed typo in PHPDoc `[@param](https://github.com/param)` by [@naopusyu](https://github.com/naopusyu) in https://github.com/laravel/framework/pull/50967
* [11.x] Fix dockblock by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50979
* [11.x] Allow time to be faked in database lock by [@JurianArie](https://github.com/JurianArie) in https://github.com/laravel/framework/pull/50981
* [11.x] Introduce method `Http::createPendingRequest()` by [@Jacobs63](https://github.com/Jacobs63) in https://github.com/laravel/framework/pull/50980
* [11.x] Add [@throws](https://github.com/throws) to some doc blocks by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50969
* [11.x] Fix PHP_MAXPATHLEN check for existing check of files for views by [@joshuaruesweg](https://github.com/joshuaruesweg) in https://github.com/laravel/framework/pull/50962
* [11.x] Allow to remove scopes from BelongsToMany relation by [@plumthedev](https://github.com/plumthedev) in https://github.com/laravel/framework/pull/50953
* [11.x] Throw exception if named rate limiter and model property do not exist by [@mateusjatenee](https://github.com/mateusjatenee) in https://github.com/laravel/framework/pull/50908

## [v11.2.0](https://github.com/laravel/framework/compare/v11.1.1...v11.2.0) - 2024-04-02

* [11.x] Fix: update `[@param](https://github.com/param)` in some doc block by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50827
* [11.x] Fix: update [@return](https://github.com/return) in some doc blocks by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50826
* [11.x] Fix retrieving generated columns on legacy PostgreSQL by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/50834
* [11.x] Trim invisible characters by [@dasundev](https://github.com/dasundev) in https://github.com/laravel/framework/pull/50832
* [11.x] Add default value for `get` and `getHidden` on `Context` by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50824
* [11.x] Improves `serve` Artisan command by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50821
* [11.x] Rehash user passwords when logging in once by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/50843
* [11.x] Do not wipe database if it does not exists by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50838
* [11.x] Better database creation failure handling by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50836
* [11.x] Use Default Schema Name on SQL Server by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/50855
* Correct typing for startedAs and virtualAs database column definitions by [@ollieread](https://github.com/ollieread) in https://github.com/laravel/framework/pull/50851
* Allow passing query Expression as column in Many-to-Many relationship by [@plumthedev](https://github.com/plumthedev) in https://github.com/laravel/framework/pull/50849
* [11.x] Fix `Middleware::trustHosts(subdomains: true)` by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/50877
* [11.x] Modify doc blocks for getGateArguments by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50874
* [11.x] Add `[@throws](https://github.com/throws)` to doc block for resolve method by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50873
* [11.x] Str trim methods by [@patrickomeara](https://github.com/patrickomeara) in https://github.com/laravel/framework/pull/50822
* [11.x] Add fluent helper by [@PhiloNL](https://github.com/PhiloNL) in https://github.com/laravel/framework/pull/50848
* [11.x] Add a new helper for context by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50878
* [11.x] `assertChain` and `assertNoChain` on job instance by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/50858
* [11.x] Remove redundant `getDefaultNamespace` method in some classes (class, interface and trait commands) by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50880
* [11.x] Remove redundant implementation of ConnectorInterface in MariaDbConnector by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50881
* [11.X] Fix: error when using `orderByRaw` in query before using `cursorPaginate` by [@ngunyimacharia](https://github.com/ngunyimacharia) in https://github.com/laravel/framework/pull/50887

## [v11.1.1](https://github.com/laravel/framework/compare/v11.1.0...v11.1.1) - 2024-03-28

* [11.x] Fix: update `[@param](https://github.com/param)` in doc blocks by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50791
* [11.x] Fix query builder `whereBetween` with CarbonPeriod and Carbon 3 by [@bakerkretzmar](https://github.com/bakerkretzmar) in https://github.com/laravel/framework/pull/50792
* [11.x] Allows asserting no output in Artisan commands by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50702
* fix typo by [@elguitarraverde](https://github.com/elguitarraverde) in https://github.com/laravel/framework/pull/50808
* [11.x] Make DB::usingConnection() respect read/write type by [@SajtiDH](https://github.com/SajtiDH) in https://github.com/laravel/framework/pull/50806
* [11.x] Fix deprecation warning caused by Carbon 3.2 by [@JackWH](https://github.com/JackWH) in https://github.com/laravel/framework/pull/50813

## [v11.1.0](https://github.com/laravel/framework/compare/v11.0.8...v11.1.0) - 2024-03-26

* [11.x] MySQL transaction isolation level fix by [@mwikberg-virta](https://github.com/mwikberg-virta) in https://github.com/laravel/framework/pull/50689
* [11.x] Add ListManagementOptions in SES mail transport by [@arifszn](https://github.com/arifszn) in https://github.com/laravel/framework/pull/50660
* [11.x] Accept non-backed enum in database queries by [@gbalduzzi](https://github.com/gbalduzzi) in https://github.com/laravel/framework/pull/50674
* [11.x] Add `Conditionable` trait to `Context` by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50707
* [11.x] Adds `[@throws](https://github.com/throws)` section to the Context's doc blocks by [@rnambaale](https://github.com/rnambaale) in https://github.com/laravel/framework/pull/50715
* [11.x] Test modifying nullable columns by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/50708
* [11.x] Introduce HASH_VERIFY env var by [@valorin](https://github.com/valorin) in https://github.com/laravel/framework/pull/50718
* [11.x] Apply default timezone when casting unix timestamps by [@daniser](https://github.com/daniser) in https://github.com/laravel/framework/pull/50751
* [11.x] Fixes `ApplicationBuilder::withCommandRouting()` usage by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50742
* [11.x] Register console commands, paths and routes after the app is booted by [@plumthedev](https://github.com/plumthedev) in https://github.com/laravel/framework/pull/50738
* [11.x] Enhance malformed request handling by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/50735
* [11.x] Adds `withSchedule` to `bootstrap/app.php` file by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50755
* [11.x] Fix dock block for create method in `InvalidArgumentException.php` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50762
* [11.x] signature typo by [@abrahamgreyson](https://github.com/abrahamgreyson) in https://github.com/laravel/framework/pull/50766
* [11.x] Simplify `ApplicationBuilder::withSchedule()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50765

## [v11.0.8](https://github.com/laravel/framework/compare/v11.0.7...v11.0.8) - 2024-03-21

* [11.x] Change typehint for enum rule from string to class-string by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/50603
* [11.x] Fixed enum and enum.backed stub paths after publish by [@haroon-mahmood-4276](https://github.com/haroon-mahmood-4276) in https://github.com/laravel/framework/pull/50629
* [11.x] Fix(ScheduleListCommand): fix doc block for listEvent method by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50638
* [11.x] Re: Fix issue with missing 'js/' directory in broadcasting installation command by [@alnahian2003](https://github.com/alnahian2003) in https://github.com/laravel/framework/pull/50657
* [11.x] Remove `$except` property from `ExcludesPaths` trait by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/50644
* [11.x] Fix command alias registration and usage. by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/50617
* [11.x] Fixed make:session-table Artisan command cannot be executed if a migration exists by [@naopusyu](https://github.com/naopusyu) in https://github.com/laravel/framework/pull/50615
* [11.x] Fix(src\illuminate\Queue): update doc block, Simplification of the code in RedisManager by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50635
* [11.x] Add `--without-reverb` and `--without-node` arguments to `install:broadcasting` command by [@duncanmcclean](https://github.com/duncanmcclean) in https://github.com/laravel/framework/pull/50662
* [11.x] Fixed `trait` stub paths after publish by [@haroon-mahmood-4276](https://github.com/haroon-mahmood-4276) in https://github.com/laravel/framework/pull/50678
* [11.x] Fixed `class` and `class.invokable` stub paths after publish by [@haroon-mahmood-4276](https://github.com/haroon-mahmood-4276) in https://github.com/laravel/framework/pull/50676
* [10.x] Fix `Collection::concat()` return type by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/50669
* [11.x] Fix adding multiple bootstrap providers with opcache by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/50665
* [11.x] Allow `BackedEnum` and `UnitEnum` in `Rule::in` and `Rule::notIn` by [@PerryvanderMeer](https://github.com/PerryvanderMeer) in https://github.com/laravel/framework/pull/50680
* [10.x] Fix command alias registration and usage by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50695

## [v11.0.7](https://github.com/laravel/framework/compare/v11.0.6...v11.0.7) - 2024-03-15

* [11.x] Re-add translations for ValidationException by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50546
* [11.x] Removes unused Dumpable trait by [@OussamaMater](https://github.com/OussamaMater) in https://github.com/laravel/framework/pull/50559
* [11.x] Fix withRouting docblock type by [@santigarcor](https://github.com/santigarcor) in https://github.com/laravel/framework/pull/50563
* [11.x] Fix docblock in FakeInvokedProcess.php by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50568
* [11.x] fix: Add missing InvalidArgumentException import to Database/Schema/SqlServerBuilder by [@ayutaya](https://github.com/ayutaya) in https://github.com/laravel/framework/pull/50573
* [11.x] Improved translation for displaying the count of errors in the validation message by [@andrey-helldar](https://github.com/andrey-helldar) in https://github.com/laravel/framework/pull/50560
* [11.x] Fix retry_after to be an integer by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50580
* [11.x] Use available `getPath()` instead of using `app_path()` to detect if base controller exists by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50583
* [11.x] Fix doc block: `[@return](https://github.com/return) static` has been modified to `[@return](https://github.com/return) void` by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50592
* accept attributes for channels by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/commit/398f49485e305756409b52af64837c784fd30de9

## [v11.0.6](https://github.com/laravel/framework/compare/v11.0.5...v11.0.6) - 2024-03-14

* [11.x] Fix version constraints for illuminate/process by [@riesjart](https://github.com/riesjart) in https://github.com/laravel/framework/pull/50524
* [11.x] Update Broadcasting Install Command With Bun Support by [@HDVinnie](https://github.com/HDVinnie) in https://github.com/laravel/framework/pull/50525
* [11.x] Allows to comment `web` and `health` routes by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50533
* [11.x] Add generics for Arr::first() by [@phh](https://github.com/phh) in https://github.com/laravel/framework/pull/50514
* Change default collation for MySQL by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50555
* [11.x] Fixes install:broadcasting command by [@joedixon](https://github.com/joedixon) in https://github.com/laravel/framework/pull/50550
* [11.x] Fix crash when configuration directory is non-existing by [@buismaarten](https://github.com/buismaarten) in https://github.com/laravel/framework/pull/50537

## [v11.0.5](https://github.com/laravel/framework/compare/v11.0.4...v11.0.5) - 2024-03-13

* [11.x] Improves broadcasting install by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50519
* [11.x] Improved exception message on 'ensure' method by [@fgaroby](https://github.com/fgaroby) in https://github.com/laravel/framework/pull/50517
* [11.x] Add hasValidRelativeSignatureWhileIgnoring macro by [@br13an](https://github.com/br13an) in https://github.com/laravel/framework/pull/50511
* [11.x] Prevents database redis options of being merged by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50523

## [v11.0.4](https://github.com/laravel/framework/compare/v11.0.3...v11.0.4) - 2024-03-13

* [11.x] Add class_exists check for `Spark`'s `subscribed` default alias Middleware by [@akr4m](https://github.com/akr4m) in https://github.com/laravel/framework/pull/50489
* [11.x] Fix: Removed TTY mode to resolve Windows compatibility issue  by [@yourchocomate](https://github.com/yourchocomate) in https://github.com/laravel/framework/pull/50495
* [11.x] Check for password before storing hash in session by [@valorin](https://github.com/valorin) in https://github.com/laravel/framework/pull/50507
* [11.x] Fix an issue with missing controller class by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50505
* [11.x] Add default empty config when creating repository within CacheManager by [@noefleury](https://github.com/noefleury) in https://github.com/laravel/framework/pull/50510

## [v11.0.3](https://github.com/laravel/framework/compare/v11.0.2...v11.0.3) - 2024-03-12

* [11.x] Arr helper map spread by [@bilfeldt](https://github.com/bilfeldt) in https://github.com/laravel/framework/pull/50474
* [11.x] add `list` rule by [@medilies](https://github.com/medilies) in https://github.com/laravel/framework/pull/50454
* [11.x] Fixes installation of passport by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50488

## [v11.0.2](https://github.com/laravel/framework/compare/v11.0.1...v11.0.2) - 2024-03-12

* [11.x] Adds `--graceful` to `php artisan migrate` by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/50486

## [v11.0.1](https://github.com/laravel/framework/compare/v11.0.0..v11.0.1) - 2024-03-12
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

* [10.x] Update mockery conflict to just disallow the broken version by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/50472
* [10.x] Conflict with specific release by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50473
* [10.x] Fix for attributes being escaped on Dynamic Blade Components by [@pascalbaljet](https://github.com/pascalbaljet) in https://github.com/laravel/framework/pull/50471
* [10.x] Revert PR 50403 by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50482

<<<<<<< HEAD
## [v10.48.1](https://github.com/laravel/framework/compare/v10.48.0...v10.48.1) - 2024-03-12

* [10.x] Add conflict for Mockery v1.6.8 by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50468

## [v10.48.0](https://github.com/laravel/framework/compare/v10.47.0...v10.48.0) - 2024-03-12

* fix: allow null, string and string array as allowed tags by [@maartenpaauw](https://github.com/maartenpaauw) in https://github.com/laravel/framework/pull/50409
* [10.x] Allow `Expression` at more places in Query Builder by [@pascalbaljet](https://github.com/pascalbaljet) in https://github.com/laravel/framework/pull/50402
* [10.x] Sleep syncing by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/50392
* [10.x] Cleaning Trait on multi-lines by [@gcazin](https://github.com/gcazin) in https://github.com/laravel/framework/pull/50413
* fix: incomplete type for Builder::from property by [@sebj54](https://github.com/sebj54) in https://github.com/laravel/framework/pull/50426
* [10.x] After commit callback throwing an exception causes broken transactions afterwards by [@oprypkhantc](https://github.com/oprypkhantc) in https://github.com/laravel/framework/pull/50423
* [10.x] Anonymous component bound attribute values are evaluated twice by [@danharrin](https://github.com/danharrin) in https://github.com/laravel/framework/pull/50403
* [10.x] Fix for sortByDesc ignoring multiple attributes by [@TWithers](https://github.com/TWithers) in https://github.com/laravel/framework/pull/50431
* [10.x] Allow sync with carbon to be set from fake method by [@abenerd](https://github.com/abenerd) in https://github.com/laravel/framework/pull/50450
* [10.x] Improves `Illuminate\Mail\Mailables\Envelope` docblock by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50448
* [10.x] Incorrect return in `FileSystem.php` by [@gcazin](https://github.com/gcazin) in https://github.com/laravel/framework/pull/50459
* [10.x] fix return types by [@imahmood](https://github.com/imahmood) in https://github.com/laravel/framework/pull/50461
* fix: phpstan issue - right side of || always false by [@Carnicero90](https://github.com/Carnicero90) in https://github.com/laravel/framework/pull/50453

## [v10.47.0](https://github.com/laravel/framework/compare/v10.46.0...v10.47.0) - 2024-03-05

* [10.x] Allow for relation key to be an enum by [@AJenbo](https://github.com/AJenbo) in https://github.com/laravel/framework/pull/50311
* FIx for "empty" strings passed to Str::apa() by [@tiagof](https://github.com/tiagof) in https://github.com/laravel/framework/pull/50335
* [10.x] Fixed header mail text component to not use markdown by [@dmyers](https://github.com/dmyers) in https://github.com/laravel/framework/pull/50332
* [10.x] Add test for the "empty strings in `Str::apa()`" fix by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/50340
* [10.x] Fix the cache cannot expire cache with `0` TTL by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/50359
* [10.x] Add fail on timeout to queue listener by [@saeedhosseiinii](https://github.com/saeedhosseiinii) in https://github.com/laravel/framework/pull/50352
* [10.x] Support sort option flags on sortByMany Collections by [@TWithers](https://github.com/TWithers) in https://github.com/laravel/framework/pull/50269
* [10.x] Add `whereAll` and `whereAny` methods to the query builder by [@musiermoore](https://github.com/musiermoore) in https://github.com/laravel/framework/pull/50344
* [10.x] Adds Reverb broadcasting driver by [@joedixon](https://github.com/joedixon) in https://github.com/laravel/framework/pull/50088

## [v10.46.0](https://github.com/laravel/framework/compare/v10.45.1...v10.46.0) - 2024-02-27

* [10.x] Ensure lazy-loading for trashed morphTo relations works by [@nuernbergerA](https://github.com/nuernbergerA) in https://github.com/laravel/framework/pull/50176
* [10.x] Arr::select not working when $keys is a string by [@Sicklou](https://github.com/Sicklou) in https://github.com/laravel/framework/pull/50169
* [10.x] Added passing loaded relationship to value callback by [@dkulyk](https://github.com/dkulyk) in https://github.com/laravel/framework/pull/50167
* [10.x] Fix optional charset and collation when creating database by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/50168
* [10.x] update doc block in PendingProcess.php by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50198
* [10.x] Fix Accepting nullable Parameters, updated doc block, and null pointer exception handling in batchable trait by [@saMahmoudzadeh](https://github.com/saMahmoudzadeh) in https://github.com/laravel/framework/pull/50209
* Make GuardsAttributes fillable property DocBlock more specific by [@liamduckett](https://github.com/liamduckett) in https://github.com/laravel/framework/pull/50229
* [10.x] Add only and except methods to Enum validation rule by [@Anton5360](https://github.com/Anton5360) in https://github.com/laravel/framework/pull/50226
* [10.x] Fixes on nesting operations performed while applying scopes. by [@Guilhem-DELAITRE](https://github.com/Guilhem-DELAITRE) in https://github.com/laravel/framework/pull/50207
* [10.x] Custom RateLimiter increase by [@khepin](https://github.com/khepin) in https://github.com/laravel/framework/pull/50197
* [10.x] Add Lateral Join to Query Builder by [@Bakke](https://github.com/Bakke) in https://github.com/laravel/framework/pull/50050
* [10.x] Update return type by [@AmirRezaM75](https://github.com/AmirRezaM75) in https://github.com/laravel/framework/pull/50252
* [10.x] Fix dockblock by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50259
* [10.x] Add `Conditionable` in enum rule by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/50257
* [10.x] Update Facade::$app to nullable by [@villfa](https://github.com/villfa) in https://github.com/laravel/framework/pull/50260
* [10.x] Truncate sqlite table name with prefix by [@kitloong](https://github.com/kitloong) in https://github.com/laravel/framework/pull/50251
* Correction comment for Str::orderedUuid() - https://github.com/larave… by [@wq9578](https://github.com/wq9578) in https://github.com/laravel/framework/pull/50268

## [v10.45.1](https://github.com/laravel/framework/compare/v10.45.0...v10.45.1) - 2024-02-21

* Fix typehint for ResetPassword::toMailUsing() by [@KKSzymanowski](https://github.com/KKSzymanowski) in https://github.com/laravel/framework/pull/50163
* [10.x] Fix Process::fake() never matching multi-line commands by [@SjorsO](https://github.com/SjorsO) in https://github.com/laravel/framework/pull/50164

## [v10.45.0](https://github.com/laravel/framework/compare/v10.44.0...v10.45.0) - 2024-02-20

* [10.x] Update `Stringable` phpdoc by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/50075
* [10.x] Allow `Collection::select()` to work on `ArrayAccess` by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/50072
* [10.x] Add `before` to the `PendingBatch` by [@xiCO2k](https://github.com/xiCO2k) in https://github.com/laravel/framework/pull/50058
* [10.x] Adjust rules call sequence by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50084
* [10.x] Fixes `Illuminate\Support\Str::fromBase64()` return type by [@SamAsEnd](https://github.com/SamAsEnd) in https://github.com/laravel/framework/pull/50108
* [10.x] Actually fix fromBase64 return type by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/50113
* [10.x] Fix warning and deprecation for Str::api by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/50114
* [10.x] Mark model instanse as not exists on deleting MorphPivot relation. by [@dkulyk](https://github.com/dkulyk) in https://github.com/laravel/framework/pull/50135
* [10.x] Adds Tappable and Conditionable to Relation class by [@DarkGhostHunter](https://github.com/DarkGhostHunter) in https://github.com/laravel/framework/pull/50124
* [10.x] Added getQualifiedMorphTypeName to MorphToMany by [@dkulyk](https://github.com/dkulyk) in https://github.com/laravel/framework/pull/50153

## [v10.44.0](https://github.com/laravel/framework/compare/v10.43.0...v10.44.0) - 2024-02-13

* [10.x] Fix empty request for HTTP connection exception by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49924
* [10.x] Add Collection::select() method by [@morrislaptop](https://github.com/morrislaptop) in https://github.com/laravel/framework/pull/49845
* [10.x] Refactor `getPreviousUrlFromSession` method in UrlGenerator by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/49944
* [10.x] Add POSIX compliant cleanup to artisan serve by [@Tofandel](https://github.com/Tofandel) in https://github.com/laravel/framework/pull/49943
* [10.x] Fix infinite loop when global scopes query contains aggregates by [@mateusjunges](https://github.com/mateusjunges) in https://github.com/laravel/framework/pull/49972
* [10.x] Adds PHPUnit 11 as conflict by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/49957
* Revert "[10.x] fix Before/After validation rules" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/50013
* [10.x] Fix the phpdoc for replaceMatches in Str and Stringable helpers by [@joke2k](https://github.com/joke2k) in https://github.com/laravel/framework/pull/49990
* [10.x] Added `setAbly()` method for `AblyBroadcaster` by [@Rijoanul-Shanto](https://github.com/Rijoanul-Shanto) in https://github.com/laravel/framework/pull/49981
* [10.x] Fix in appendExceptionToException method exception type check by [@t1nkl](https://github.com/t1nkl) in https://github.com/laravel/framework/pull/49958
* [10.x] DB command: add sqlcmd -C flag when 'trust_server_certificate' is set by [@hulkur](https://github.com/hulkur) in https://github.com/laravel/framework/pull/49952
* Allows Setup and Teardown actions to be reused in alternative TestCase for Laravel by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49973
* [10.x] Add `toBase64()` and `fromBase64()` methods to Stringable and Str classes by [@mtownsend5512](https://github.com/mtownsend5512) in https://github.com/laravel/framework/pull/49984
* [10.x] Allows to defer resolving pcntl only if it's available by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50024
* [10.x] Fixes missing `Throwable` import and handle if `originalExceptionHandler` or `originalDeprecationHandler` property isn't used by alternative TestCase by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/50021
* [10.x] Type hinting for conditional validation rules by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/50017
* [10.x] Introduce new `Arr::take()` helper by [@ryangjchandler](https://github.com/ryangjchandler) in https://github.com/laravel/framework/pull/50015
* [10.x] Improved Handling of Empty Component Slots with HTML Comments or Line Breaks by [@comes](https://github.com/comes) in https://github.com/laravel/framework/pull/49966
* [10.x] Introduce Observe attribute for models by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/framework/pull/49843
* [10.x] Add ScopedBy attribute for models by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/framework/pull/50034
* [10.x] Update reserved names in `GeneratorCommand` by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/50043
* [10.x] fix Validator::validated get nullable array by [@helitik](https://github.com/helitik) in https://github.com/laravel/framework/pull/50056
* [10.x] Pass Herd specific env variables to "artisan serve" by [@mpociot](https://github.com/mpociot) in https://github.com/laravel/framework/pull/50069
* Remove regex case insensitivity modifier in UUID detection to speed it up slightly by [@maximal](https://github.com/maximal) in https://github.com/laravel/framework/pull/50067
* [10.x] HTTP retry method can accept array as first param by [@me-shaon](https://github.com/me-shaon) in https://github.com/laravel/framework/pull/50064
* [10.x] Fix DB::afterCommit() broken in tests using DatabaseTransactions by [@oprypkhantc](https://github.com/oprypkhantc) in https://github.com/laravel/framework/pull/50068

## [v10.43.0](https://github.com/laravel/framework/compare/v10.42.0...v10.43.0) - 2024-01-30

* [10.x] Add storage:unlink command by [@salkovmx](https://github.com/salkovmx) in https://github.com/laravel/framework/pull/49795
* [10.x] Unify `\Illuminate\Log\LogManager` method definition comments with `\Psr\Logger\Interface` by [@eusonlito](https://github.com/eusonlito) in https://github.com/laravel/framework/pull/49805
* [10.x] class-name string argument for global scopes by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/framework/pull/49802
* [10.x] Add `hasIndex()` and minor Schema enhancements by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49796
* [10.x] Do not touch `BelongsToMany` relation when using `withoutTouching` by [@mateusjunges](https://github.com/mateusjunges) in https://github.com/laravel/framework/pull/49798
* [10.x] Check properties on mailables are initialized before sharing with the view by [@j3j5](https://github.com/j3j5) in https://github.com/laravel/framework/pull/49813
* [10.x] Remove duplicate actions/checkout from queue workflow by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/49828
* [10.x] Add `insertOrIgnoreUsing` for Eloquent by [@trovster](https://github.com/trovster) in https://github.com/laravel/framework/pull/49827
* [10.x] Make `hasIndex()` Order-sensitive  by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49840
* [10.x] Release action by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49838
* [10.x] Add MariaDb1060Platform by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49848
* [10.x] Unified Pivot and Model Doc Block `$guarded` by [@eusonlito](https://github.com/eusonlito) in https://github.com/laravel/framework/pull/49851
* [10.x] Introducing `beforeStartingTransaction` callback and use it in `LazilyRefreshDatabase` by [@pascalbaljet](https://github.com/pascalbaljet) in https://github.com/laravel/framework/pull/49853
* [10.x] fix password max validation message by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/49861
* [10.x] Fix validation message used for max file size by [@mateusjunges](https://github.com/mateusjunges) in https://github.com/laravel/framework/pull/49879
* Update README.md by [@foremtehan](https://github.com/foremtehan) in https://github.com/laravel/framework/pull/49878
* [10.x] Adds `FormRequest[@getRules](https://github.com/getRules)()` method by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/49860
* [10.x] add addGlobalScopes method by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/framework/pull/49880
* [10.x] Allow brick/math 0.12 by [@LogicSatinn](https://github.com/LogicSatinn) in https://github.com/laravel/framework/pull/49883
* [10.x] Add support for streamed JSON Response by [@pelmered](https://github.com/pelmered) in https://github.com/laravel/framework/pull/49873
* [10.x] Using the native fopen exception in LockableFile.php by [@eusonlito](https://github.com/eusonlito) in https://github.com/laravel/framework/pull/49895
* [10.x] Fix LazilyRefreshDatabase when testing artisan commands by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/49914
* [10.x] Fix expressions in with-functions doing aggregates by [@tpetry](https://github.com/tpetry) in https://github.com/laravel/framework/pull/49912
* [10.x] Fix redis tag entries never becoming stale if cache ttl is past time by [@jagers](https://github.com/jagers) in https://github.com/laravel/framework/pull/49864
* [10.x] Fix - The `Translator` may incorrectly report the locale of a missing translation key by [@VicGUTT](https://github.com/VicGUTT) in https://github.com/laravel/framework/pull/49900
* [10.x] fix Before/After validation rules by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/49871

## [v10.42.0](https://github.com/laravel/framework/compare/v10.41.0...v10.42.0) - 2024-01-23

* [10.x] Switch to hash_equals in `File::hasSameHash()` by [@simonhamp](https://github.com/simonhamp) in https://github.com/laravel/framework/pull/49721
* [10.x] fix Rule::unless for callable $condition by [@dbakan](https://github.com/dbakan) in https://github.com/laravel/framework/pull/49726
* [10.x] Adds JobQueueing event by [@dmason30](https://github.com/dmason30) in https://github.com/laravel/framework/pull/49722
* [10.x] Fix decoding issue in MailLogTransport by [@rojtjo](https://github.com/rojtjo) in https://github.com/laravel/framework/pull/49727
* [10.x] Implement "max" validation rule for passwords by [@angelej](https://github.com/angelej) in https://github.com/laravel/framework/pull/49739
* [10.x] Add multiple channels/routes to AnonymousNotifiable at once by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/49745
* [10.x] Sort service providers alphabetically by [@buismaarten](https://github.com/buismaarten) in https://github.com/laravel/framework/pull/49762
* [10.x] Global default options for the http factory by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49767
* [10.x] Only use `Carbon` if accessed from Laravel or also uses `illuminate/support` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49772
* [10.x] Add `Str::unwrap` by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/49779
* [10.x] Allow Uuid and Ulid in Carbon::createFromId() by [@kylekatarnls](https://github.com/kylekatarnls) in https://github.com/laravel/framework/pull/49783
* [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49785

## [v10.41.0](https://github.com/laravel/framework/compare/v10.40.0...v10.41.0) - 2024-01-16

* [10.x] Add a `threshold` parameter to the `Number::spell` helper by [@caendesilva](https://github.com/caendesilva) in https://github.com/laravel/framework/pull/49610
* Revert "[10.x] Make ComponentAttributeBag Arrayable" by [@luanfreitasdev](https://github.com/luanfreitasdev) in https://github.com/laravel/framework/pull/49623
* [10.x] Fix return value and docblock by [@dwightwatson](https://github.com/dwightwatson) in https://github.com/laravel/framework/pull/49627
* [10.x] Add an option to specify the default path to the models directory for `php artisan model:prune` by [@dbhynds](https://github.com/dbhynds) in https://github.com/laravel/framework/pull/49617
* [10.x] Allow job chains to be conditionally dispatched by [@fjarrett](https://github.com/fjarrett) in https://github.com/laravel/framework/pull/49624
* [10.x] Add test for existing empty test by [@lioneaglesolutions](https://github.com/lioneaglesolutions) in https://github.com/laravel/framework/pull/49632
* [10.x] Add additional context to Mailable assertion messages by [@lioneaglesolutions](https://github.com/lioneaglesolutions) in https://github.com/laravel/framework/pull/49631
* [10.x] Allow job batches to be conditionally dispatched by [@fjarrett](https://github.com/fjarrett) in https://github.com/laravel/framework/pull/49639
* [10.x] Revert parameter name change by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49659
* [10.x] Printing Name of The Method that Calls `ensureIntlExtensionIsInstalled` in `Number` class. by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/49660
* [10.x] Update pagination tailwind.blade.php by [@anasmorahhib](https://github.com/anasmorahhib) in https://github.com/laravel/framework/pull/49665
* [10.x] feat: add base argument to Stringable->toInteger() by [@adamczykpiotr](https://github.com/adamczykpiotr) in https://github.com/laravel/framework/pull/49670
* [10.x]: Remove unused class ShouldBeUnique when make a job by [@Kenini1805](https://github.com/Kenini1805) in https://github.com/laravel/framework/pull/49669
* [10.x] Add tests for Eloquent methods by [@milwad-dev](https://github.com/milwad-dev) in https://github.com/laravel/framework/pull/49673
* Implement draft workflow by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49683
* [10.x] Fixing Types, Word and Returns of `Number`class. by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/49681
* [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49679
* [10.x] Officially support floats in trans_choice and Translator::choice by [@philbates35](https://github.com/philbates35) in https://github.com/laravel/framework/pull/49693
* [10.x] Use static function by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/49696
* [10.x] Revert "[10.x] Improve numeric comparison for custom casts" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49702
* [10.x] Add exit code to queue:clear, and queue:forget commands by [@bytestream](https://github.com/bytestream) in https://github.com/laravel/framework/pull/49707
* [10.x] Allow StreamInterface as raw HTTP Client body by [@janolivermr](https://github.com/janolivermr) in https://github.com/laravel/framework/pull/49705

## [v10.40.0](https://github.com/laravel/framework/compare/v10.39.0...v10.40.0) - 2024-01-09

* [10.x] `Model::preventAccessingMissingAttributes()` raises exception for enums & primitive castable attributes that were not retrieved by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/49480
* [10.x] Include system versioned tables for MariaDB by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49509
* [10.x] Fixes the `Arr::dot()` method to properly handle indexes array by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/49507
* [10.x] Expand Gate::allows & Gate::denies signature by [@antonkomarev](https://github.com/antonkomarev) in https://github.com/laravel/framework/pull/49503
* [10.x] Improve numeric comparison for custom casts by [@imahmood](https://github.com/imahmood) in https://github.com/laravel/framework/pull/49504
* [10.x] Add session except method by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/49520
* [10.x] Add `Number::clamp` by [@jbrooksuk](https://github.com/jbrooksuk) in https://github.com/laravel/framework/pull/49512
* [10.x] Fix Schedule test by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/49538
* [10.x] Use correct format of date by [@buismaarten](https://github.com/buismaarten) in https://github.com/laravel/framework/pull/49541
* [10.x] Clean Arr by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/49530
* [10.x] Make ComponentAttributeBag Arrayable by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/49524
* [10.x] Fix whenAggregated when default is not specified by [@lovePizza](https://github.com/lovePizza) in https://github.com/laravel/framework/pull/49521
* [10.x] Update AsArrayObject.php to use ARRAY_AS_PROPS flag by [@pintend](https://github.com/pintend) in https://github.com/laravel/framework/pull/49534
* [10.x] Remove invalid `RedisCluster::client()` call by [@tillkruss](https://github.com/tillkruss) in https://github.com/laravel/framework/pull/49560
* [10.x] Remove unused code from `PhpRedisConnector` by [@tillkruss](https://github.com/tillkruss) in https://github.com/laravel/framework/pull/49559
* [10.x] Flush about command during test runs by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49557
* [10.x] Fix parentOfParameter method by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/49548
* [10.x] Make the Schema Builder macroable by [@kevinb1989](https://github.com/kevinb1989) in https://github.com/laravel/framework/pull/49547
* [10.x] Remove unused code from tests by [@imahmood](https://github.com/imahmood) in https://github.com/laravel/framework/pull/49566
* [10.x] Update Query/Builder.php $columns typehint by [@Grldk](https://github.com/Grldk) in https://github.com/laravel/framework/pull/49563
* [10.x] Add assertViewEmpty to TestView by [@dwightwatson](https://github.com/dwightwatson) in https://github.com/laravel/framework/pull/49558
* [10.x] Update tailwind.blade.php for dark mode by [@sabinchacko03](https://github.com/sabinchacko03) in https://github.com/laravel/framework/pull/49515
* [10.x] Fix deprecation with null value in cache FileStore by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49578
* [10.x] Allow Vite asset path customization by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49437
* [10.x] Type hinting of the second parameter of date- and time-related `where*()` methods of `Illuminate\Database\Query\Builder` by [@lorenzolosa](https://github.com/lorenzolosa) in https://github.com/laravel/framework/pull/49599
* [10.x] Fix Stringable::convertCase() return type by [@vaites](https://github.com/vaites) in https://github.com/laravel/framework/pull/49590
* Allow \Blade::stringable() to be called on native Iterables by [@tsjason](https://github.com/tsjason) in https://github.com/laravel/framework/pull/49591
* [10.x] Refactor time handling using `InteractsWithTime` trait method by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/49601
* [10.x] Add `assertCount` test helper by [@xurshudyan](https://github.com/xurshudyan) in https://github.com/laravel/framework/pull/49609
* [10.x] Ability to establish connection without using Config Repository by [@deleugpn](https://github.com/deleugpn) in https://github.com/laravel/framework/pull/49527
* [10.x] Add APA style title helper by [@hotmeteor](https://github.com/hotmeteor) in https://github.com/laravel/framework/pull/49572
* [10.x] Fix usage of alternatives in error output by [@Mrjavaci](https://github.com/Mrjavaci) in https://github.com/laravel/framework/pull/49614
* [10.x] Use locks for queue job popping for PlanetScale's MySQL-compatible Vitess 19 engine by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49561

## [v10.39.0](https://github.com/laravel/framework/compare/v10.38.2...v10.39.0) - 2023-12-27

* [9.x] Support for phpredis 6.0.0 by [@MichalHubatka](https://github.com/MichalHubatka) in https://github.com/laravel/framework/pull/48380
* [10.x] Dynamic `maxTries` for queued jobs by [@mechelon](https://github.com/mechelon) in https://github.com/laravel/framework/pull/49473
* [10.x] Avoid TypeError when using json validation rule when PHP < 8.3 by [@Xint0](https://github.com/Xint0) in https://github.com/laravel/framework/pull/49474
* [10.x] Fix use statement compilation in Blade templates by [@MrPunyapal](https://github.com/MrPunyapal) in https://github.com/laravel/framework/pull/49479
* [10.x] Allow testing prompts validation by [@cerbero90](https://github.com/cerbero90) in https://github.com/laravel/framework/pull/49447
* [10.x] Add 'Roundrobin' Symfony mailer transport driver by [@me-shaon](https://github.com/me-shaon) in https://github.com/laravel/framework/pull/49435

## [v10.38.2](https://github.com/laravel/framework/compare/v10.38.1...v10.38.2) - 2023-12-22

* [10.x] Add `conflict` for `doctrine/dbal:^4.0` to `illuminate/database` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49456
* [10.x] Simplify Arr::dot by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/49461
* [10.x] Illuminate\Filesystem\join_paths(): Argument #2 must be of type string, null given by [@tylernathanreed](https://github.com/tylernathanreed) in https://github.com/laravel/framework/pull/49467
* [10.x] Allow deprecation logging in tests by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49457
* [10.x] Fix missing Validation rules not working with nested array by [@aabadawy](https://github.com/aabadawy) in https://github.com/laravel/framework/pull/49449

## [v10.38.1](https://github.com/laravel/framework/compare/v10.38.0...v10.38.1) - 2023-12-20

* [10.x] Adds support for parse callbacks from anonymous classes by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/49432
* Revert "[10.x] Drop the primary key if it exists when adding a new primary key" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/49448
* [10.x] Fix installing DBAL on a fresh app by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49438
* [10.x] Add method to create request by [@dododedodonl](https://github.com/dododedodonl) in https://github.com/laravel/framework/pull/49446
* [10.x] Move `Illuminate\Foundation\Application::joinPaths()` to `Illuminate\Filesystem\join_paths()` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49433

## [v10.38.0](https://github.com/laravel/framework/compare/v10.37.3...v10.38.0) - 2023-12-19

* [10.x] Add routeRoute method to test request by [@fragkp](https://github.com/fragkp) in https://github.com/laravel/framework/pull/49366
* [10.x] Update import & typo by [@chu121su12](https://github.com/chu121su12) in https://github.com/laravel/framework/pull/49370
* [10.x] Show default `false` values in `db:table` command by [@PerryvanderMeer](https://github.com/PerryvanderMeer) in https://github.com/laravel/framework/pull/49379
* [10.x] Fix primary key creation for MySQL with `sql_require_primary_key` enabled by [@mtawil](https://github.com/mtawil) in https://github.com/laravel/framework/pull/49374
* [10.x] Add `charset` and `collation` method to `Blueprint` by [@gcazin](https://github.com/gcazin) in https://github.com/laravel/framework/pull/49396
* Fixes second run of `about` command on Octane by [@josecl](https://github.com/josecl) in https://github.com/laravel/framework/pull/49387
* [10.x] Fix bug in ArrayLock getCurrentOwner by [@Joostb](https://github.com/Joostb) in https://github.com/laravel/framework/pull/49393
* [10.x] Dynamo Batch Repository - Match Default Horizon Sort by [@evan-burrell](https://github.com/evan-burrell) in https://github.com/laravel/framework/pull/49391
* [10.x] Add Blade `[@session](https://github.com/session)` Directive by [@jrd-lewis](https://github.com/jrd-lewis) in https://github.com/laravel/framework/pull/49339
* [10.x] Improve `Arr::dot` performance by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/49386
* [10.x] Fix assertStatus() parameter order by [@marcovo](https://github.com/marcovo) in https://github.com/laravel/framework/pull/49404
* [10.x] Only set `defaultCasters` if not previously set by [@inxilpro](https://github.com/inxilpro) in https://github.com/laravel/framework/pull/49402
* [10.x] Fixes parameter type in `ManagesFrequencies` by [@Lucas-Schmukas](https://github.com/Lucas-Schmukas) in https://github.com/laravel/framework/pull/49399
* [10.x] Add SQLite support for `whereJsonContains` method by [@danieleambrosino](https://github.com/danieleambrosino) in https://github.com/laravel/framework/pull/49401
* [10x.] Use native json_validate in Validation by [@gtjamesa](https://github.com/gtjamesa) in https://github.com/laravel/framework/pull/49413
* [10.x] Introducing `isEmpty` and `isNotEmpty` to `ComponentAttributeBag` by [@devajmeireles](https://github.com/devajmeireles) in https://github.com/laravel/framework/pull/49408
* [10.x] Drop the primary key if it exists when adding a new primary key by [@KieranFYI](https://github.com/KieranFYI) in https://github.com/laravel/framework/pull/49392
* [10.x] Improve schema builder `getColumns()` method by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49416
* [10.x] Add `MailMessage` helpers for plain text email notifications by [@onlime](https://github.com/onlime) in https://github.com/laravel/framework/pull/49407
* [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49426
* [10.x] Add Conditionable to Pipeline by [@shane-zeng](https://github.com/shane-zeng) in https://github.com/laravel/framework/pull/49429

## [v10.37.3](https://github.com/laravel/framework/compare/v10.37.2...v10.37.3) - 2023-12-13

* Flush middleware callbacks by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/commit/bb49a72c1a839b2b19d0fcea4e8b203a122454ef

## [v10.37.2](https://github.com/laravel/framework/compare/v10.37.1...v10.37.2) - 2023-12-13

* Ability to test chained job via closure by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/49337
* [10.x] Add `progress` option to `PendingBatch` by [@orkhanahmadov](https://github.com/orkhanahmadov) in https://github.com/laravel/framework/pull/49273
* [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49338
* [10.x] Avoid using `rescue()` in standalone `illuminate/database` component. by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49355
* [10.x] Exclude extension types on PostgreSQL when retrieving types by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49358
* [10.x] Revert "[10.x] Disconnecting the database connection after testing" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/49361

## [v10.37.1](https://github.com/laravel/framework/compare/v10.37.0...v10.37.1) - 2023-12-12

* [10.x] Disconnecting the database connection after testing by [@KentarouTakeda](https://github.com/KentarouTakeda) in https://github.com/laravel/framework/pull/49327
* [10.x] Get user-defined types on PostgreSQL by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49303

## [v10.37.0](https://github.com/laravel/framework/compare/v10.35.0...v10.37.0) - 2023-12-12

* [10.x] Add `engine` method to `Blueprint` by [@jbrooksuk](https://github.com/jbrooksuk) in https://github.com/laravel/framework/pull/49250
* [10.x] Use translator from validator in `Can` and `Enum` rules by [@fancyweb](https://github.com/fancyweb) in https://github.com/laravel/framework/pull/49251
* [10.x] Get indexes of a table by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49204
* [10.x] Filesystem : can lock file on append of content by [@StephaneBour](https://github.com/StephaneBour) in https://github.com/laravel/framework/pull/49262
* [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49266
* [10.x] Fixes generating facades documentation shouldn't be affected by `php-psr` extension by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49268
* [10.x] Fixes `AboutCommand::format()` docblock by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49274
* [10.x] `Route::getController()` should return `null` when the accessing closure based route by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49269
* [10.x] Add "noActionOnUpdate" method in Illuminate/Database/Schema/ForeignKeyDefinition by [@hrsa](https://github.com/hrsa) in https://github.com/laravel/framework/pull/49297
* [10.x] Fixing number helper for floating 0.0 by [@mr-punyapal](https://github.com/mr-punyapal) in https://github.com/laravel/framework/pull/49277
* [10.x] Allow checking if lock succesfully restored by [@Joostb](https://github.com/Joostb) in https://github.com/laravel/framework/pull/49272
* [10.x] Enable DynamoDB as a backend for Job Batches by [@khepin](https://github.com/khepin) in https://github.com/laravel/framework/pull/49169
* [10.x] Removed deprecated and not used argument by [@Muetze42](https://github.com/Muetze42) in https://github.com/laravel/framework/pull/49304
* [10.x] Add Conditionable to Batched and Chained jobs by [@bretto36](https://github.com/bretto36) in https://github.com/laravel/framework/pull/49310
* [10.x] Include partitioned tables on PostgreSQL when retrieving tables by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49326
* [10.x] Allow to pass `Arrayable` or `Stringble` in rules `In` and `NotIn` by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/49055
* [10.x] Display error message if json_encode() fails by [@aimeos](https://github.com/aimeos) in https://github.com/laravel/framework/pull/48856
* [10.x] Allow error list per field by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49309
* [10.x] Get foreign keys of a table by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49264
* [10.x] PHPStan Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49343
* [10.x] Handle missing translations: more robust handling of callback return value by [@DeanWunder](https://github.com/DeanWunder) in https://github.com/laravel/framework/pull/49341

## [v10.35.0](https://github.com/laravel/framework/compare/v10.34.2...v10.35.0) - 2023-12-05

* [10.x] Add `Conditionable` trait to `AssertableJson` by [@khalilst](https://github.com/khalilst) in https://github.com/laravel/framework/pull/49172
* [10.x] Add `--with-secret` option to Artisan `down` command. by [@jj15asmr](https://github.com/jj15asmr) in https://github.com/laravel/framework/pull/49171
* [10.x] Add support for `Number::summarize` by [@jcsoriano](https://github.com/jcsoriano) in https://github.com/laravel/framework/pull/49197
* [10.x] Add Blade [@use](https://github.com/use) directive by [@simonhamp](https://github.com/simonhamp) in https://github.com/laravel/framework/pull/49179
* [10.x] Fixes retrying failed jobs causes PHP memory exhaustion errors when dealing with thousands of failed jobs by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49186
* [10.x] Add "substituteImplicitBindingsUsing" method to router by [@calebporzio](https://github.com/calebporzio) in https://github.com/laravel/framework/pull/49200
* [10.x] Cookies Having Independent Partitioned State (CHIPS) by [@fabricecw](https://github.com/fabricecw) in https://github.com/laravel/framework/pull/48745
* [10.x] Update InteractsWithDictionary.php to use base InvalidArgumentException by [@Grldk](https://github.com/Grldk) in https://github.com/laravel/framework/pull/49209
* [10.x] Fix docblock for wasRecentlyCreated by [@stancl](https://github.com/stancl) in https://github.com/laravel/framework/pull/49208
* [10.x] Fix loss of attributes after calling child component by [@rojtjo](https://github.com/rojtjo) in https://github.com/laravel/framework/pull/49216
* [10.x] Fix typo in PHPDoc comment by [@caendesilva](https://github.com/caendesilva) in https://github.com/laravel/framework/pull/49234
* [10.x] Determine if the given view exists. by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49231

## [v10.34.2](https://github.com/laravel/framework/compare/v10.34.1...v10.34.2) - 2023-11-28

* [v10.x] Add missing methods to newly extended fake `Vite` instance by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/49165

## [v10.34.1](https://github.com/laravel/framework/compare/v10.34.0...v10.34.1) - 2023-11-28

* [10.x] Streamline `DatabaseMigrations` and `RefreshDatabase` events by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49153
* [10.x] Use HtmlString in Vite fake by [@jasonvarga](https://github.com/jasonvarga) in https://github.com/laravel/framework/pull/49163

## [v10.34.0](https://github.com/laravel/framework/compare/v10.33.0...v10.34.0) - 2023-11-28

* [10.x] Fix `hex_color` validation rule by [@apih](https://github.com/apih) in https://github.com/laravel/framework/pull/49070
* [10.x] Prevent passing null to base64_decode in Encrypter by [@robtesch](https://github.com/robtesch) in https://github.com/laravel/framework/pull/49071
* [10.x] Alias Number class by [@ziadoz](https://github.com/ziadoz) in https://github.com/laravel/framework/pull/49073
* [10.x] Added File Validation `extensions` by [@eusonlito](https://github.com/eusonlito) in https://github.com/laravel/framework/pull/49082
* [10.x] Add [@throws](https://github.com/throws) in doc-blocks by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/49091
* [10.x] Update docblocks for consistency by [@dwightwatson](https://github.com/dwightwatson) in https://github.com/laravel/framework/pull/49092
* [10.x] Throw exception when trying to initiate `Collection` using `WeakMap` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49095
* [10.x] Only stage committed transactions by [@hansnn](https://github.com/hansnn) in https://github.com/laravel/framework/pull/49093
* Better transaction manager object design by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/49103
* [10.x] use php 8.3 `mb_str_pad()` for `Str::pad*` by [@amacado](https://github.com/amacado) in https://github.com/laravel/framework/pull/49108
* [10.x] Add Conditionable to TestResponse by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/49112
* [10.x] Allow multiple types in Collection's `ensure` method by [@ash-jc-allen](https://github.com/ash-jc-allen) in https://github.com/laravel/framework/pull/49127
* [10.x] Fix middleware "SetCacheHeaders" with download responses by [@clementbirkle](https://github.com/clementbirkle) in https://github.com/laravel/framework/pull/49138
* [10.x][Cache] Fix handling of `false` values in apc by [@simivar](https://github.com/simivar) in https://github.com/laravel/framework/pull/49145
* [10.x] Reset numeric rules after each attribute's validation by [@apih](https://github.com/apih) in https://github.com/laravel/framework/pull/49142
* [10.x] Extract dirty getter for `performUpdate` by [@taka-oyama](https://github.com/taka-oyama) in https://github.com/laravel/framework/pull/49141
* [10.x] `ensure`: Resolve `$itemType` outside the closure by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/49137
* Allow "missing" method to be used on route groups by [@redelschaap](https://github.com/redelschaap) in https://github.com/laravel/framework/pull/49144
* [10.x] Get tables and views info by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49020
* [10.x] Fix `MorphTo::associate()` PHPDoc parameter by [@devfrey](https://github.com/devfrey) in https://github.com/laravel/framework/pull/49162
* [10.x] Make test error messages more multi-byte readable by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/49160
* [10.x] Generate a unique hash for anonymous components by [@billyonecan](https://github.com/billyonecan) in https://github.com/laravel/framework/pull/49156
* [10.x] Improves output when using `php artisan about --json` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/49154
* [10.x] Make fake instance inherit from `Vite` when using `withoutVite()` by [@orkhanahmadov](https://github.com/orkhanahmadov) in https://github.com/laravel/framework/pull/49150

## [v10.33.0](https://github.com/laravel/framework/compare/v10.32.1...v10.33.0) - 2023-11-21

- [10.x] Fix wrong parameter passing and add these rules to dependent rules by [@kayw-geek](https://github.com/kayw-geek) in https://github.com/laravel/framework/pull/49008
- [10.x] Make Validator::getValue() public by [@shinsenter](https://github.com/shinsenter) in https://github.com/laravel/framework/pull/49007
- [10.x] Custom messages for `Password` validation rule by [@rcknr](https://github.com/rcknr) in https://github.com/laravel/framework/pull/48928
- [10.x] Round milliseconds in database seeder console output runtime by [@SjorsO](https://github.com/SjorsO) in https://github.com/laravel/framework/pull/49014
- [10.x] Add a `Number` utility class by [@caendesilva](https://github.com/caendesilva) in https://github.com/laravel/framework/pull/48845
- [10.x] Fix the replace() method in DefaultService class by [@jonagoldman](https://github.com/jonagoldman) in https://github.com/laravel/framework/pull/49022
- [10.x] Pass the property $validator as a parameter to the $callback Closure by [@shinsenter](https://github.com/shinsenter) in https://github.com/laravel/framework/pull/49015
- [10.x] Fix Cache DatabaseStore::add() error occur on Postgres within transaction by [@xdevor](https://github.com/xdevor) in https://github.com/laravel/framework/pull/49025
- [10.x] Support asserting against chained batches by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/49003
- [10.x] Prevent DB `Cache::get()` occur race condition by [@xdevor](https://github.com/xdevor) in https://github.com/laravel/framework/pull/49031
- [10.x] Fix notifications being counted as sent without a "shouldSend" method by [@joelwmale](https://github.com/joelwmale) in https://github.com/laravel/framework/pull/49030
- [10.x] Fix tests failure on Windows by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/49037
- [10.x] Add unless conditional on validation rules by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/49048
- [10.x] Handle string based payloads that are not JSON or form data when creating PSR request instances by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/49047
- [10.x] Fix directory separator CMD display on windows by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/49045
- [10.x] Fix mapSpread doc by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48941
- [10.x] Tiny `Support\Collection` test fix - Unused data provider parameter by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/framework/pull/49053
- [10.x] Feat: Add color_hex validation rule by [@nikopeikrishvili](https://github.com/nikopeikrishvili) in https://github.com/laravel/framework/pull/49056
- [10.x] Handle missing translation strings using callback by [@DeanWunder](https://github.com/DeanWunder) in https://github.com/laravel/framework/pull/49040
- [10.x] Add Str::transliterate to Stringable by [@dwightwatson](https://github.com/dwightwatson) in https://github.com/laravel/framework/pull/49065
- Add Alpha Channel support to Hex validation rule by [@ahinkle](https://github.com/ahinkle) in https://github.com/laravel/framework/pull/49069

## [v10.32.1](https://github.com/laravel/framework/compare/v10.32.0...v10.32.1) - 2023-11-14

- [10.x] Add `[@pushElseIf](https://github.com/pushElseIf)` and `[@pushElse](https://github.com/pushElse)` by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/48990

## [v10.32.0](https://github.com/laravel/framework/compare/v10.31.0...v10.32.0) - 2023-11-14

- Update PendingRequest.php by [@mattkingshott](https://github.com/mattkingshott) in https://github.com/laravel/framework/pull/48939
- [10.x] Change array_key_exists with null coalescing assignment operator in FilesystemAdapter by [@miladev95](https://github.com/miladev95) in https://github.com/laravel/framework/pull/48943
- [10.x] Use container to resolve email validator class by [@orkhanahmadov](https://github.com/orkhanahmadov) in https://github.com/laravel/framework/pull/48942
- [10.x] Added `getGlobalMiddleware` method to HTTP Client Factory by [@pascalbaljet](https://github.com/pascalbaljet) in https://github.com/laravel/framework/pull/48950
- [10.x] Detect MySQL read-only mode error as a lost connection by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/48937
- [10.x] Adds more implicit validation rules for `present` based on other fields by [@diamondobama](https://github.com/diamondobama) in https://github.com/laravel/framework/pull/48908
- [10.x] Refactor set_error_handler callback to use arrow function in `InteractsWithDeprecationHandling` by [@miladev95](https://github.com/miladev95) in https://github.com/laravel/framework/pull/48954
- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48962
- Fix issue that prevents BladeCompiler to raise an exception when temporal compiled blade template is not found. by [@juanparati](https://github.com/juanparati) in https://github.com/laravel/framework/pull/48957
- [10.x] Fix how nested transaction callbacks are handled by [@mateusjatenee](https://github.com/mateusjatenee) in https://github.com/laravel/framework/pull/48859
- [10.x] Fixes Batch Callbacks not triggering if job timeout while in transaction by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48961
- [10.x] expressions in migration computations fail by [@tpetry](https://github.com/tpetry) in https://github.com/laravel/framework/pull/48976
- [10.x] Fixes Exception: Cannot traverse an already closed generator when running Arr::first with an empty generator and no callback by [@moshe-autoleadstar](https://github.com/moshe-autoleadstar) in https://github.com/laravel/framework/pull/48979
- fixes issue with stderr when there was "]" character. by [@nikopeikrishvili](https://github.com/nikopeikrishvili) in https://github.com/laravel/framework/pull/48975
- [10.x] Fix Postgres cache store failed to put exist cache in transaction by [@xdevor](https://github.com/xdevor) in https://github.com/laravel/framework/pull/48968

## [v10.31.0](https://github.com/laravel/framework/compare/v10.30.1...v10.31.0) - 2023-11-07

- [10.x] Allow `Sleep::until()` to be passed a timestamp as a string by [@jameshulse](https://github.com/jameshulse) in https://github.com/laravel/framework/pull/48883
- [10.x] Fix whereHasMorph() with nullable morphs by [@MarkKremer](https://github.com/MarkKremer) in https://github.com/laravel/framework/pull/48903
- [10.x] Handle `class_parents` returning false in `class_uses_recursive` by [@RoflCopter24](https://github.com/RoflCopter24) in https://github.com/laravel/framework/pull/48902
- [10.x] Enable default retrieval of all fragments in `fragments()` and `fragmentsIf()` methods by [@tabuna](https://github.com/tabuna) in https://github.com/laravel/framework/pull/48894
- [10.x] Allow placing a batch on a chain by [@khepin](https://github.com/khepin) in https://github.com/laravel/framework/pull/48633
- [10.x] Dispatch 'connection failed' event in async http client request by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/48900
- authenticate method refactored to use null coalescing operator by [@miladev95](https://github.com/miladev95) in https://github.com/laravel/framework/pull/48917
- [10.x] Add support for Sec-Purpose header by [@nanos](https://github.com/nanos) in https://github.com/laravel/framework/pull/48925
- [10.x] Allow setting retain_visibility config option on Flysystem filesystems by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/48935
- [10.x] Escape forward slashes when exploding wildcard rules by [@matt-farrugia](https://github.com/matt-farrugia) in https://github.com/laravel/framework/pull/48936

## [v10.30.1](https://github.com/laravel/framework/compare/v10.30.0...v10.30.1) - 2023-11-01

- [10.x] Fix postgreSQL reserved word column names w/ guarded attributes broken in native column attributes implementation by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/48877

## [v10.30.0](https://github.com/laravel/framework/compare/v10.29.0...v10.30.0) - 2023-10-31

- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48815
- [10.x] Verify hash config by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48814
- [10.x] Fix the issue of using the now function within the ArrayCache in Lumen by [@cxlblm](https://github.com/cxlblm) in https://github.com/laravel/framework/pull/48826
- [10.x] Match service provider after resolved by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48824
- [10.x] Fix type error registering PSR Request by [@kpicaza](https://github.com/kpicaza) in https://github.com/laravel/framework/pull/48823
- [10.x] Ability to configure default session block timeouts by [@bytestream](https://github.com/bytestream) in https://github.com/laravel/framework/pull/48795
- [10.x] Improvements for `artisan migrate --pretend` command 🚀 by [@NickSdot](https://github.com/NickSdot) in https://github.com/laravel/framework/pull/48768
- [10.x] Add support for getting native columns' attributes by [@hafezdivandari](https://github.com/hafezdivandari) in https://github.com/laravel/framework/pull/48357
- fix(Eloquent/Builder): calling the methods on passthru base object should be case-insensitive by [@luka-papez](https://github.com/luka-papez) in https://github.com/laravel/framework/pull/48852
- [10.x] Fix `QueriesRelationships[@getRelationHashedColumn](https://github.com/getRelationHashedColumn)()` typehint by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/48847
- [10.x] Remember the job on the exception by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48830
- fix bug for always throwing exception when we pass a callable to throwUnlessStatus method [test included] by [@mhfereydouni](https://github.com/mhfereydouni) in https://github.com/laravel/framework/pull/48844
- [10.x] Dispatch events based on a DB transaction result by [@mateusjatenee](https://github.com/mateusjatenee) in https://github.com/laravel/framework/pull/48705
- [10.x] Reset ShouldDispatchAfterCommitEventTest objects properties by [@mateusjatenee](https://github.com/mateusjatenee) in https://github.com/laravel/framework/pull/48858
- [10.x] Throw exception when trying to escape array for database connection by [@sidneyprins](https://github.com/sidneyprins) in https://github.com/laravel/framework/pull/48836
- [10.x] Fix Stringable objects not converted to string in HTTP facade Query parameters and Body by [@LasseRafn](https://github.com/LasseRafn) in https://github.com/laravel/framework/pull/48849

## [v10.29.0](https://github.com/laravel/framework/compare/v10.28.0...v10.29.0) - 2023-10-24

- [10.x] Fixes `Str::password()` does not always generate password with numbers by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48681
- [10.x] Fixes cache:prune-stale-tags preg_match delimiter no escaped by [@ame1973](https://github.com/ame1973) in https://github.com/laravel/framework/pull/48702
- [10.x] Allow route:list to expand middleware groups in 'VeryVerbose' mode by [@NickSdot](https://github.com/NickSdot) in https://github.com/laravel/framework/pull/48703
- [10.x] Fix model:prune command error with non-class php files by [@zlodes](https://github.com/zlodes) in https://github.com/laravel/framework/pull/48708
- [10.x] Show CliDumper source content on last line by [@CalebDW](https://github.com/CalebDW) in https://github.com/laravel/framework/pull/48707
- [10.x] Revival of the reverted changes in 10.25.0: `firstOrCreate` `updateOrCreate` improvement through `createOrFirst` + additional query tests  by [@mpyw](https://github.com/mpyw) in https://github.com/laravel/framework/pull/48637
- [10.x] allow resolving view from closure by [@PH7-Jack](https://github.com/PH7-Jack) in https://github.com/laravel/framework/pull/48719
- [10.x] Allow creation of PSR request with merged data by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48696
- [10.x] Update DocBlock for `convertCase` Method to Reflect Optional $encoding Parameter by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48729
- [10.x] Use ValidationException class from Validator Property by [@a-h-abid](https://github.com/a-h-abid) in https://github.com/laravel/framework/pull/48736
- [10.x] Implement Test Coverage for `Str::convertCase` Method by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48730
- [10.x] Extend Test Coverage for `Str::take` Function by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48728
- [10.x] Add `replaceMatches` to Str class by [@hosmelq](https://github.com/hosmelq) in https://github.com/laravel/framework/pull/48727
- [10.x] Fix duplicate conditions on retrying `SELECT` calls under `createOrFirst()` by [@KentarouTakeda](https://github.com/KentarouTakeda) in https://github.com/laravel/framework/pull/48725
- [10.x] Uses `stefanzweifel/git-auto-commit-action[@v5](https://github.com/v5)` by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/48763
- [10.x] fix typo in comment by [@vintagesucks](https://github.com/vintagesucks) in https://github.com/laravel/framework/pull/48770
- [10.x] Require DBAL 3 when installing by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/48769
- [10.x] Escape the delimiter when extracting an excerpt from text by [@standaniels](https://github.com/standaniels) in https://github.com/laravel/framework/pull/48765
- [10.x] Fix `replaceMatches` in Str class by [@hosmelq](https://github.com/hosmelq) in https://github.com/laravel/framework/pull/48760
- [10.x] Moves logger instance creation to a protected method by [@rodrigopedra](https://github.com/rodrigopedra) in https://github.com/laravel/framework/pull/48759
- [10.x] Add runningConsoleCommand(...$commands) method by [@trevorgehman](https://github.com/trevorgehman) in https://github.com/laravel/framework/pull/48751
- [10.x] Update annotations in wrap method to accommodate Collection instances by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48746
- [10.x] Add Tests for Str::replaceMatches Method by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48771
- [10.x] Do not bubble exceptions thrown rendering error view when debug is false (prevent infinite loops) by [@simensen](https://github.com/simensen) in https://github.com/laravel/framework/pull/48732
- [10.x] Correct phpdoc for Grammar::setConnection by [@Neol3108](https://github.com/Neol3108) in https://github.com/laravel/framework/pull/48779
- [10.x] Add `displayName` for queued Artisan commands by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/48778
- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48797
- [10.x] Make inherited relations and virtual attributes appear in model:show command by [@sebj54](https://github.com/sebj54) in https://github.com/laravel/framework/pull/48800

## [v10.28.0](https://github.com/laravel/framework/compare/v10.27.0...v10.28.0) - 2023-10-10

- [10.x] Fixed issue: Added a call to the `getValue` method by [@lozobojan](https://github.com/lozobojan) in https://github.com/laravel/framework/pull/48652
- [10.x] Add an example for queue retry range option by [@pionl](https://github.com/pionl) in https://github.com/laravel/framework/pull/48691
- [10.x] Add percentage to be used as High Order Messages by [@WendellAdriel](https://github.com/WendellAdriel) in https://github.com/laravel/framework/pull/48689
- [10.x] Optimize `exists` validation for empty array input by [@mtawil](https://github.com/mtawil) in https://github.com/laravel/framework/pull/48684

## [v10.27.0](https://github.com/laravel/framework/compare/v10.26.2...v10.27.0) - 2023-10-09

- [10.x] Store blocks after prepare strings by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/48641
- [10.x] throw TransportException instead of Exception in SES mail drivers by [@bchalier](https://github.com/bchalier) in https://github.com/laravel/framework/pull/48645
- [10.x] Fix `Model::replicate()` when using unique keys by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/48636
- [10.x] Don't crash if replacement cannot be represented as a string by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/48530
- [10.x] Extended `pluck()` testcases by [@bert-w](https://github.com/bert-w) in https://github.com/laravel/framework/pull/48657
- [10.x] Fixes `GeneratorCommand` not able to prevent uppercase reserved name such as  `__CLASS__` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48667
- [10.x] Fix timing sensitive flaky test by [@KentarouTakeda](https://github.com/KentarouTakeda) in https://github.com/laravel/framework/pull/48664
- [10.x] Fixed implementation related to `afterCommit` on Postgres and MSSQL database drivers by [@SakiTakamachi](https://github.com/SakiTakamachi) in https://github.com/laravel/framework/pull/48662
- [10.x] Implement chunkById in descending order by [@cristiancalara](https://github.com/cristiancalara) in https://github.com/laravel/framework/pull/48666

## [v10.26.2](https://github.com/laravel/framework/compare/v10.26.1...v10.26.2) - 2023-10-03

- Revert "Hint query builder closures (#48562)" by @taylorotwell in https://github.com/laravel/framework/pull/48620

## [v10.26.1](https://github.com/laravel/framework/compare/v10.26.0...v10.26.1) - 2023-10-03

- [10.x] Fix selection of vendor files after searching by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/48619

## [v10.26.0](https://github.com/laravel/framework/compare/v10.25.2...v10.26.0) - 2023-10-03

- [10.x] Convert Expression to string for from in having subqueries by @ikari7789 in https://github.com/laravel/framework/pull/48525
- [10.x] Allow searching on `vendor:publish` prompt by @jessarcher in https://github.com/laravel/framework/pull/48586
- [10.x] Enhance Test Coverage for Macroable Trait by @salehhashemi1992 in https://github.com/laravel/framework/pull/48583
- [10.x] Add new SQL error messages by @magnusvin in https://github.com/laravel/framework/pull/48601
- [10.x] Ensure array cache considers milliseconds by @timacdonald in https://github.com/laravel/framework/pull/48573
- [10.x] Prevent `session:table` command from creating duplicates by @jessarcher in https://github.com/laravel/framework/pull/48602
- [10.x] Handle expiration in seconds by @timacdonald in https://github.com/laravel/framework/pull/48600
- [10.x] Avoid duplicate code for create table commands by extending new `Illuminate\Console\MigrationGeneratorCommand` by @crynobone in https://github.com/laravel/framework/pull/48603
- [10.x] Add Closure Type Hinting for Query Builders by @AJenbo in https://github.com/laravel/framework/pull/48562

## [v10.25.2](https://github.com/laravel/framework/compare/v10.25.1...v10.25.2) - 2023-09-28

- [10.x] Account for new MariaDB platform by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48563
- [10.x] Add Windows fallback for `multisearch` prompt by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/48565
- Revert "[10.x] Fix blade failing to compile when mixing inline/block [@php](https://github.com/php) directives" by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48575
- [10.x] Added Validation Macro Functionality Tests by [@salehhashemi1992](https://github.com/salehhashemi1992) in https://github.com/laravel/framework/pull/48570
- Revert expiry time changes by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48576

## [v10.25.1](https://github.com/laravel/framework/compare/v10.25.0...v10.25.1) - 2023-09-27

- [10.x] Correct parameter type on MakesHttpRequests:followRedirects() by [@AJenbo](https://github.com/AJenbo) in https://github.com/laravel/framework/pull/48557
- [10.x] Fix `firstOrNew` on `HasManyThrough` relations by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48542
- [10.x] Fix "after commit" callbacks not running on nested transactions using `RefreshDatabase` or `DatabaseMigrations` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48523
- [10.x] Use the dedicated key getters in BelongsTo by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/48509
- [10.x] Fix undefined constant `STDIN` error with `Artisan::call` during a request by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/48559

## [v10.25.0](https://github.com/laravel/framework/compare/v10.24.0...v10.25.0) - 2023-09-26

- [10.x] Fix key type in [@return](https://github.com/return) tag of EnumeratesValues::ensure() docblock by [@wimski](https://github.com/wimski) in https://github.com/laravel/framework/pull/48456
- [10.x] Add str()->take($limit) and Str::take($string, $limit) by [@moshe-autoleadstar](https://github.com/moshe-autoleadstar) in https://github.com/laravel/framework/pull/48467
- [10.x] Throttle exceptions by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48391
- [10.x] Fix blade failing to compile when mixing inline/block [@php](https://github.com/php) directives by [@CalebDW](https://github.com/CalebDW) in https://github.com/laravel/framework/pull/48420
- [10.x] Fix test name for stringable position by [@shawnlindstrom](https://github.com/shawnlindstrom) in https://github.com/laravel/framework/pull/48480
- [10.x] Create fluent method convertCase by [@rmunate](https://github.com/rmunate) in https://github.com/laravel/framework/pull/48492
- [10.x] Fix `CanBeOneOfMany` giving erroneous results by [@Guilhem-DELAITRE](https://github.com/Guilhem-DELAITRE) in https://github.com/laravel/framework/pull/47427
- [10.x] Disable autoincrement for unsupported column type by [@ikari7789](https://github.com/ikari7789) in https://github.com/laravel/framework/pull/48501
- [10.x] Increase bcrypt rounds to 12 by [@valorin](https://github.com/valorin) in https://github.com/laravel/framework/pull/48494
- [10.x] Ensure array driver expires values at the expiry time by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48497
- [10.x] Fix typos by [@szepeviktor](https://github.com/szepeviktor) in https://github.com/laravel/framework/pull/48513
- [10.x] Improve tests for `Arr::first` and `Arr::last` by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/48511
- [10.x] Set morph type for MorphToMany pivot model by [@gazben](https://github.com/gazben) in https://github.com/laravel/framework/pull/48432
- [10.x] Revert from using `createOrFirst` in other `*OrCreate` methods by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48531
- [10.x] Fix typos in tests by [@szepeviktor](https://github.com/szepeviktor) in https://github.com/laravel/framework/pull/48534
- [10.x] Adds `updateOrCreate` on HasManyThrough relations regression test by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48533
- [10.x] Convert exception rate limit to seconds by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48543
- [10.x] Adds the `firstOrCreate` and `createOrFirst` methods to the `HasManyThrough` relation by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48541
- [10.x] Handle custom extensions when caching views by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48524
- [10.x] Set prompt interactivity mode by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/48468

## [v10.24.0](https://github.com/laravel/framework/compare/v10.23.1...v10.24.0) - 2023-09-19

- Make types of  parameter of join method consistent in the Query Builder by [@melicerte](https://github.com/melicerte) in https://github.com/laravel/framework/pull/48386
- [10.x] Fix file race condition after view:cache and artisan up by [@roxik](https://github.com/roxik) in https://github.com/laravel/framework/pull/48368
- [10.x] Re-enable SQL Server CI by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/48393
- Update request.stub by [@olivsinz](https://github.com/olivsinz) in https://github.com/laravel/framework/pull/48402
- [10.x] phpdoc: Auth\Access\Response constructor allows null message by [@snmatsui](https://github.com/snmatsui) in https://github.com/laravel/framework/pull/48394
- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48390
- Turn off autocomplete for csrf_field by [@maxheckel](https://github.com/maxheckel) in https://github.com/laravel/framework/pull/48371
- [10.x] Remove PHP 8.1 Check for including Enums in Tests by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/framework/pull/48415
- [10.x] Improve naming by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48413
- [10.x] Fix "Text file busy" error when call deleteDirectory by [@ycs77](https://github.com/ycs77) in https://github.com/laravel/framework/pull/48422
- Fix Cache::many() with small numeric keys by [@AlexKarpan](https://github.com/AlexKarpan) in https://github.com/laravel/framework/pull/48423
- [10.x] Update actions/checkout from v3 to v4 by [@tamiroh](https://github.com/tamiroh) in https://github.com/laravel/framework/pull/48439
- `lazyById` doesn't check availability of id (alias) column in database response and silently ends up with endless loop. `chunkById` does. by [@decadence](https://github.com/decadence) in https://github.com/laravel/framework/pull/48436
- [10.x] Allow older jobs to be faked by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48434
- [10.x] introduce `Str::substrPos` by [@amacado](https://github.com/amacado) in https://github.com/laravel/framework/pull/48421
- [10.x] Guess table name correctly in migrations if column's name have ('to', 'from' and/or 'in') terms by [@i350](https://github.com/i350) in https://github.com/laravel/framework/pull/48437
- [10.x] Refactored LazyCollection::take() to save memory by [@fuwasegu](https://github.com/fuwasegu) in https://github.com/laravel/framework/pull/48382
- [10.x] Get value attribute when default value is an enum by [@squiaios](https://github.com/squiaios) in https://github.com/laravel/framework/pull/48452
- [10.x] Composer helper improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48448
- [10.x] Test Symfony v6.4 by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48400

## [v10.23.1](https://github.com/laravel/framework/compare/v10.23.0...v10.23.1) - 2023-09-13

- Use PHP native json_validate in isJson function if available by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/48367
- [10.x] Remove and update a few tearDown methods. by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/48381
- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48378
- add "resolve" to `Component::ignoredMethods()` method by [@PH7-Jack](https://github.com/PH7-Jack) in https://github.com/laravel/framework/pull/48373
- [10.x] Add `notModified` method to HTTP client by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/48379
- [10.x] Update the visibility of setUp and tearDown by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/48383
- Revert "[10.x] Validate version and variant in `Str::isUuid()`" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/framework/pull/48385

## [v10.23.0](https://github.com/laravel/framework/compare/v10.22.0...v10.23.0) - 2023-09-12

- [10.x] Do not add token to AWS credentials without validating it first by [@mmehmet](https://github.com/mmehmet) in https://github.com/laravel/framework/pull/48297
- [10.x] Add array to docs of `ResponseFactory::redirectToAction` by [@NiclasvanEyk](https://github.com/NiclasvanEyk) in https://github.com/laravel/framework/pull/48309
- [10.x] Deduplicate exceptions by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48288
- [10.x] Change Arr::sortRecursiveDesc() method to static. by [@gkisiel](https://github.com/gkisiel) in https://github.com/laravel/framework/pull/48327
- [10.x] Validate version and variant in `Str::isUuid()` by [@inxilpro](https://github.com/inxilpro) in https://github.com/laravel/framework/pull/48321
- [10.x] Adds `make:view` Artisan command by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/48330
- [10.x] Make ComponentAttributeBag JsonSerializable by [@iamgergo](https://github.com/iamgergo) in https://github.com/laravel/framework/pull/48338
- [10.x] add missing method to message bag class by [@PH7-Jack](https://github.com/PH7-Jack) in https://github.com/laravel/framework/pull/48348
- [10.x] Add newResponse method to PendingRequest by [@denniseilander](https://github.com/denniseilander) in https://github.com/laravel/framework/pull/48344
- [10.x] Add before/after database truncation methods to DatabaseTruncation trait by [@cwilby](https://github.com/cwilby) in https://github.com/laravel/framework/pull/48345
- [10.x] Passthru test options by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/48335
- [10.x] Support for phpredis 6.0.0 by [@stemis](https://github.com/stemis) in https://github.com/laravel/framework/pull/48362
- [10.x] Improve test cases and achieve 100% code coverage by [@sohelrana820](https://github.com/sohelrana820) in https://github.com/laravel/framework/pull/48360
- [10.x] Support for phpredis 6.0.0 by [@stemis](https://github.com/stemis) in https://github.com/laravel/framework/pull/48364
- [10.x] Render mailable inline images by [@pniaps](https://github.com/pniaps) in https://github.com/laravel/framework/pull/48292

## [v10.22.0](https://github.com/laravel/framework/compare/v10.21.1...v10.22.0) - 2023-09-05

- [10.x] Add ulid testing helpers by [@Jasonej](https://github.com/Jasonej) in https://github.com/laravel/framework/pull/48276
- [10.x] Fix issue with table prefix duplication in DatabaseTruncation trait by [@mobidev86](https://github.com/mobidev86) in https://github.com/laravel/framework/pull/48291
- [10.x] Fixed a typo in phpdoc block by [@back2Lobby](https://github.com/back2Lobby) in https://github.com/laravel/framework/pull/48296

## [v10.21.1](https://github.com/laravel/framework/compare/v10.21.0...v10.21.1) - 2023-09-04

- [10.x] HotFix: throw captured `UniqueConstraintViolationException` if there are no matching records on `SELECT` retry by [@mpyw](https://github.com/mpyw) in https://github.com/laravel/framework/pull/48234
- [10.x] Adds testing helpers for Precognition by [@peterfox](https://github.com/peterfox) in https://github.com/laravel/framework/pull/48151
- [10.x] GeneratorCommand - Sorting possible models and events by [@TWithers](https://github.com/TWithers) in https://github.com/laravel/framework/pull/48249
- [10.x] Add Enum Support to the In and NotIn Validation Rules by [@geisi](https://github.com/geisi) in https://github.com/laravel/framework/pull/48247
- PHP 8.3 Support by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48265
- [10.x] Call `renderForAssertions` in all Mailable assertions by [@jamsch](https://github.com/jamsch) in https://github.com/laravel/framework/pull/48254
- [10.x] Introduce `requireEnv` helper by [@lucasmichot](https://github.com/lucasmichot) in https://github.com/laravel/framework/pull/48261
- [10.x] Combine prefix with table for `compileDropPrimary` PostgreSQL by [@dyriavin](https://github.com/dyriavin) in https://github.com/laravel/framework/pull/48268
- [10.x] BelongsToMany Docblock Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48282

## [v10.21.0](https://github.com/laravel/framework/compare/v10.20.0...v10.21.0) - 2023-08-29

- [10.x] Add broadcastAs function at BroadcastNotificationCreated by [@raphaelcangucu](https://github.com/raphaelcangucu) in https://github.com/laravel/framework/pull/48136
- [10.x] Fix `createOrFirst` on transactions by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48144
- [10.x] Improve `PendingRequest::pool()` return type by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/48150
- [10.x] Adds start and end string replacement helpers by [@joedixon](https://github.com/joedixon) in https://github.com/laravel/framework/pull/48025
- [10.x] Fix flaky test using microtime by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48156
- [10.x] Allow failed job providers to be countable by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48177
- [10.x] Change the return type of getPublicToken function by [@fahamjv](https://github.com/fahamjv) in https://github.com/laravel/framework/pull/48173
- [10.x] Fix flakey `HttpClientTest` test by [@joshbonnick](https://github.com/joshbonnick) in https://github.com/laravel/framework/pull/48166
- [10.x] Give access to job UUID in the job queued event by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48179
- [10.x] Add `serializeAndRestore()` to `QueueFake` and`BusFake` by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/48131
- Add visibility Support for Scoped Disk Configurations by [@okaufmann](https://github.com/okaufmann) in https://github.com/laravel/framework/pull/48186
- [10.x] Ensuring Primary Reference on Retry in `createOrFirst()` by [@mpyw](https://github.com/mpyw) in https://github.com/laravel/framework/pull/48161
- [10.x] Make the `firstOrCreate` methods in relations use `createOrFirst` behind the scenes by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/48192
- [10.x] Enhancing `updateOrCreate()` to Use `firstOrCreate()` by [@mpyw](https://github.com/mpyw) in https://github.com/laravel/framework/pull/48160
- [10.x] Introduce short-hand "false" syntax for Blade component props by [@ryangjchandler](https://github.com/ryangjchandler) in https://github.com/laravel/framework/pull/48084
- [10.x] Fix validation of attributes that depend on previous excluded attribute by [@hans-thomas](https://github.com/hans-thomas) in https://github.com/laravel/framework/pull/48122
- [10.x] Remove unused `catch` exception variables by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/48209
- Revert "feature: introduce short hand false syntax for component prop… by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48220
- [10.x] Return from maintenance middleware early if URL is excluded by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/48218
- [10.x] Array to string conversion error exception by [@hans-thomas](https://github.com/hans-thomas) in https://github.com/laravel/framework/pull/48219
- [10.x] Migrate to `laravel/facade-documenter` repository by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48223
- Remove unneeded Return type in Docblock of Illuminate\Database\Eloquent\Builder.php by [@FrazerFlanagan](https://github.com/FrazerFlanagan) in https://github.com/laravel/framework/pull/48228
- [10.x] Fix issues with updated_at by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/48230
- [10.x] Use Symfony Response in exception handler by [@thomasschiet](https://github.com/thomasschiet) in https://github.com/laravel/framework/pull/48226
- [10.x] Allow failed jobs to be counted by "connection" and "queue" by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48216
- [10.x] Add method `Str::convertCase` by [@rmunate](https://github.com/rmunate) in https://github.com/laravel/framework/pull/48224
- [10.x] Make the `updateOrCreate` methods in relations use `firstOrCreate` behind the scenes by [@mpyw](https://github.com/mpyw) in https://github.com/laravel/framework/pull/48213

## [v10.20.0](https://github.com/laravel/framework/compare/v10.19.0...v10.20.0) - 2023-08-22

- [10.x] Allow default values when merging values into a resource by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/48073
- [10.x] Adds a `createOrFirst` method to Eloquent by [@tonysm](https://github.com/tonysm) in https://github.com/laravel/framework/pull/47973
- [10.x] Allow utilising `withTrashed()`, `withoutTrashed()` and `onlyTrashed()` on `MorphTo` relationship even without `SoftDeletes` Model by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47880
- [10.x] Mark Request JSON data to be InputBag in docblocks by [@jnoordsij](https://github.com/jnoordsij) in https://github.com/laravel/framework/pull/48085
- [10.x] Markdown Mailables: Allow omitting Footer and Header when customising components by [@jorisnoo](https://github.com/jorisnoo) in https://github.com/laravel/framework/pull/48080
- [10.x] Update EmailVerificationRequest return docblock by [@ahmedash95](https://github.com/ahmedash95) in https://github.com/laravel/framework/pull/48087
- [10.x] Add commonly reusable Composer related commands from 1st party packages by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48096
- [10.x] Add ability to measure a single callable and get result by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48077
- [10.x] Fixes incorrect method visibility and add unit tests for `Illuminate\Support\Composer` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/48104
- [10.x] Skip convert empty string to null test by [@hungthai1401](https://github.com/hungthai1401) in https://github.com/laravel/framework/pull/48105
- [10.x] Using complete insert for mysqldump when appending migration dump to schema file by [@emulgeator](https://github.com/emulgeator) in https://github.com/laravel/framework/pull/48126
- [10.x] Add `hasPackage` method to Composer class by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/framework/pull/48124
- [10.x] Add `assertJsonPathCanonicalizing` method by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/48117
- [10.x] Configurable storage path via environment variable by [@sl0wik](https://github.com/sl0wik) in https://github.com/laravel/framework/pull/48115
- [10.x] Support providing subquery as value to `where` builder method by [@gdebrauwer](https://github.com/gdebrauwer) in https://github.com/laravel/framework/pull/48116
- [10.x] Minor Tweaks by [@utsavsomaiya](https://github.com/utsavsomaiya) in https://github.com/laravel/framework/pull/48138

## [v10.19.0](https://github.com/laravel/framework/compare/v10.18.0...v10.19.0) - 2023-08-15

- [10.x] Fix typo in update `HasUniqueIds` by [@iamcarlos94](https://github.com/iamcarlos94) in https://github.com/laravel/framework/pull/47994
- [10.x] Gracefully handle scientific notation by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/48002
- [10.x] Fix docblocks for throw_if and throw_unless by [@AbdelElrafa](https://github.com/AbdelElrafa) in https://github.com/laravel/framework/pull/48003
- [10.x] Add `wordWrap` to `Str` by [@joshbonnick](https://github.com/joshbonnick) in https://github.com/laravel/framework/pull/48012
- [10.x] Fix RetryBatchCommand overlapping of failed jobs when run concurrently with the same Batch ID using isolatableId by [@rybakihor](https://github.com/rybakihor) in https://github.com/laravel/framework/pull/48000
- [10.x] Fix `assertRedirectToRoute` when route uri is empty by [@khernik93](https://github.com/khernik93) in https://github.com/laravel/framework/pull/48023
- [10.x] Fix empty table displayed when using the --pending option but there are no pending migrations by [@TheBlckbird](https://github.com/TheBlckbird) in https://github.com/laravel/framework/pull/48019
- [10.x] Fix forced use of write DB connection by [@oleksiikhr](https://github.com/oleksiikhr) in https://github.com/laravel/framework/pull/48015
- [10.x] Use model cast when builder created updated at value by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47942
- [10.x] Fix Collection::search and LazyCollection::search return type by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/48030
- [10.x] Add ability to customize class resolution in event discovery by [@bastien-phi](https://github.com/bastien-phi) in https://github.com/laravel/framework/pull/48031
- [10.x] Add `percentage` method to Collections by [@WendellAdriel](https://github.com/WendellAdriel) in https://github.com/laravel/framework/pull/48034
- [10.x] Fix parsing error in console when parameter description contains `--` by [@rxrw](https://github.com/rxrw) in https://github.com/laravel/framework/pull/48021
- [10.x] Allow Listeners to dynamically specify delay using `withDelay` by [@CalebDW](https://github.com/CalebDW) in https://github.com/laravel/framework/pull/48026
- [10.x] Add dynamic return types to rescue helper by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/48062
- [10.x] createMany & createManyQuietly add count argument by [@JHWelch](https://github.com/JHWelch) in https://github.com/laravel/framework/pull/48048
- [10.x] Attributes support on default component slot by [@royduin](https://github.com/royduin) in https://github.com/laravel/framework/pull/48039
- [10.x] Add WithoutRelations attribute for model serialization by [@Neol3108](https://github.com/Neol3108) in https://github.com/laravel/framework/pull/47989
- [10.x] Can apply WithoutRelations to entire class by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/48068
- [10.x] createMany & createManyQuietly make argument optional by [@JHWelch](https://github.com/JHWelch) in https://github.com/laravel/framework/pull/48070

## [v10.18.0](https://github.com/laravel/framework/compare/v17.1...v10.18.0) - 2023-08-08

- [10.x] Allow DatabaseRefreshed event to include given `database` and `seed` options by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47923
- [10.x] Use generics in `throw_if` and `throw_unless` to indicate dynamic exception type by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/47938
- [10.x] Fixes artisan about --only should be case insensitive by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47955
- [10.x] Improve decimal shape validation by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47954
- docs: update phpdoc in Str helper for remove function by [@squiaios](https://github.com/squiaios) in https://github.com/laravel/framework/pull/47967
- [10.x] Remove return on void callback by [@gonzunigad](https://github.com/gonzunigad) in https://github.com/laravel/framework/pull/47969
- [9.x] Improve decimal shape validation by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47957
- [10.x] Add `content` method to Vite by [@michael-rubel](https://github.com/michael-rubel) in https://github.com/laravel/framework/pull/47968
- [10.x] Allow empty port in psql schema dump by [@Arzaroth](https://github.com/Arzaroth) in https://github.com/laravel/framework/pull/47988
- [10.x] Show config when the value is false or zero by [@saeedhosseiinii](https://github.com/saeedhosseiinii) in https://github.com/laravel/framework/pull/47987
- [10.x] Add getter for components on IO interaction by [@chris-ware](https://github.com/chris-ware) in https://github.com/laravel/framework/pull/47982

## [v10.17.1](https://github.com/laravel/framework/compare/v10.17.0...v10.17.1) - 2023-08-02

- [9.x] Back porting #47838 by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47840
- [9.x] Normalise predis command argument where it maybe an object.   by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47902
- [9.x] Migrate JSON data to shared InputBag by [@ImJustToNy](https://github.com/ImJustToNy) in https://github.com/laravel/framework/pull/47919
- [10.x] Fix docblocks of the dispatchable trait by [@imanghafoori1](https://github.com/imanghafoori1) in https://github.com/laravel/framework/pull/47921
- [9.x] Circumvent PHP 8.2.9 date format bug that makes artisan serve crash by [@levu42](https://github.com/levu42) in https://github.com/laravel/framework/pull/47931
- [10.x] Fix prompt and console component spacing when calling another command by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/47928
- [10.x] Fix prompt rendering after `callSilent` by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/47929
- [10.x] Update ensure() collection method to correctly work with Interfaces and object inheritance by [@karpilin](https://github.com/karpilin) in https://github.com/laravel/framework/pull/47934

## [v10.17.0](https://github.com/laravel/framework/compare/v10.16.1...v10.17.0) - 2023-08-01

- [10.x] Update `TrustProxies` to rely on `$headers` if properly set by [@inxilpro](https://github.com/inxilpro) in https://github.com/laravel/framework/pull/47844
- [10.x] Accept protocols as argument for URL validation by [@MrMicky-FR](https://github.com/MrMicky-FR) in https://github.com/laravel/framework/pull/47843
- [10.x] Support human-friendly text for file size by [@jxxe](https://github.com/jxxe) in https://github.com/laravel/framework/pull/47846
- [10.x] Added UploadedFile as return type by [@khrigo](https://github.com/khrigo) in https://github.com/laravel/framework/pull/47847
- [10.x] Add option to adjust database default lock timeout by [@joelharkes](https://github.com/joelharkes) in https://github.com/laravel/framework/pull/47854
- [10.x] PHP 8.3 builds by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/47788
- [10.x] Add Collection::enforce() method by [@inxilpro](https://github.com/inxilpro) in https://github.com/laravel/framework/pull/47785
- [10.x] Allow custom mutex names for isolated commands by [@rybakihor](https://github.com/rybakihor) in https://github.com/laravel/framework/pull/47814
- Fix for issues with closure-based scheduled commands in schedule:test by [@mobidev86](https://github.com/mobidev86) in https://github.com/laravel/framework/pull/47862
- [10.x] Extract customised deleted_at column name from Model FQN by [@edvordo](https://github.com/edvordo) in https://github.com/laravel/framework/pull/47873
- [10.x] Adding Minutes Option in Some Frequencies by [@joaopalopes24](https://github.com/joaopalopes24) in https://github.com/laravel/framework/pull/47789
- [10.x] Add `config:show` command by [@xiCO2k](https://github.com/xiCO2k) in https://github.com/laravel/framework/pull/47858
- [10.x] Test Improvements for `hashed` password by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47904
- [10.x] Use shared facade script by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47901
- [10.x] Add --test and --pest options to make:component by [@nshiro](https://github.com/nshiro) in https://github.com/laravel/framework/pull/47894
- [10.x] Prompts by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/46772
- [10.x] Migrate JSON data to shared InputBag by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47914
- [10.x] Fix `Factory::configure()` return type by [@axlon](https://github.com/axlon) in https://github.com/laravel/framework/pull/47920
- [10.x] Fix Http global middleware for queue, octane, and dependency injection by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47915

## [v10.16.1](https://github.com/laravel/framework/compare/v10.17.1...v10.16.1) - 2023-07-26

- [10.x] Fix BusFake::assertChained() for a single job by [@gehrisandro](https://github.com/gehrisandro) in https://github.com/laravel/framework/pull/47832
- [10.x] Retain `$request->request` `InputBag` type by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/framework/pull/47838

## [v10.16.0](https://github.com/laravel/framework/compare/v10.15.0...v10.16.0) - 2023-07-25

- [10.x] Improve display of sub-minute tasks in `schedule:list` command. by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/47720
- [10.x] Add new SQL error message "No connection could be made because the target machine actively refused it" by [@magnusvin](https://github.com/magnusvin) in https://github.com/laravel/framework/pull/47718
- [10.x] Ignore second in HttpRequestTest date comparison by [@kylekatarnls](https://github.com/kylekatarnls) in https://github.com/laravel/framework/pull/47719
- [10.x] Call `renderForAssertions` in `assertHasSubject` by [@ttrig](https://github.com/ttrig) in https://github.com/laravel/framework/pull/47728
- [10.x] We dont want Symfony to catch pcntl signal by [@ChristopheBorcard](https://github.com/ChristopheBorcard) in https://github.com/laravel/framework/pull/47725
- [10.x] Use atomic locks for command mutex by [@Gaitholabi](https://github.com/Gaitholabi) in https://github.com/laravel/framework/pull/47624
- [10.x] Improve typehint for Model::getConnectionResolver() by [@LukeTowers](https://github.com/LukeTowers) in https://github.com/laravel/framework/pull/47749
- [10.x] add getRedisConnection to ThrottleRequestsWithRedis by [@snmatsui](https://github.com/snmatsui) in https://github.com/laravel/framework/pull/47742
- [10.x] Adjusts for Volt by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/47757
- [10.x] Fix sql server paging problems by [@joelharkes](https://github.com/joelharkes) in https://github.com/laravel/framework/pull/47763
- [10.x] Typo type of data by [@hungthai1401](https://github.com/hungthai1401) in https://github.com/laravel/framework/pull/47775
- [10.x] Add missing tests for the `schedule:list` command. by [@xiCO2k](https://github.com/xiCO2k) in https://github.com/laravel/framework/pull/47787
- [10.x] Fix `Str::replace` return type by [@datlechin](https://github.com/datlechin) in https://github.com/laravel/framework/pull/47779
- [10.x] Collection::except() with null returns all by [@pniaps](https://github.com/pniaps) in https://github.com/laravel/framework/pull/47821
- [10.x] fix issue #47727 with wrong return type by [@renky](https://github.com/renky) in https://github.com/laravel/framework/pull/47820
- [10.x] Remove unused variable in `VendorPublishCommand` by [@hungthai1401](https://github.com/hungthai1401) in https://github.com/laravel/framework/pull/47817
- [10.x] Remove unused variable in `MigrateCommand` by [@sangnguyenplus](https://github.com/sangnguyenplus) in https://github.com/laravel/framework/pull/47816
- [10.x] Revert 47763 fix sql server by [@dunhamjared](https://github.com/dunhamjared) in https://github.com/laravel/framework/pull/47792
- [10.x] Add test for Message ID, References and Custom Headers for Mailables by [@alexbowers](https://github.com/alexbowers) in https://github.com/laravel/framework/pull/47791
- [10.x] Add support for `BackedEnum` in Collection `groupBy` method by [@osbre](https://github.com/osbre) in https://github.com/laravel/framework/pull/47823
- [10.x] Support inline disk for scoped driver by [@alexbowers](https://github.com/alexbowers) in https://github.com/laravel/framework/pull/47776
- [10.x] Allowing bind of IPv6 addresses in development server by [@MuriloChianfa](https://github.com/MuriloChianfa) in https://github.com/laravel/framework/pull/47804
- [10.x] Add more info to issue template by [@driesvints](https://github.com/driesvints) in https://github.com/laravel/framework/pull/47828

## [v10.15.0](https://github.com/laravel/framework/compare/v10.14.1...v10.15.0) - 2023-07-11

- [10.x] Change return type of `getPrivateToken` in AblyBroadcaster by [@milwad](https://github.com/milwad)-dev in https://github.com/laravel/framework/pull/47602
- [10.x] Add toRawSql, dumpRawSql() and ddRawSql() to Query Builders by [@tpetry](https://github.com/tpetry) in https://github.com/laravel/framework/pull/47507
- [10.x] Fix recorderHandler not recording changes made by middleware by [@j3j5](https://github.com/j3j5) in https://github.com/laravel/framework/pull/47614
- Pass queue from Mailable to SendQueuedMailable job by [@Tarpsvo](https://github.com/Tarpsvo) in https://github.com/laravel/framework/pull/47612
- [10.x] Sub-minute Scheduling by [@jessarcher](https://github.com/jessarcher) in https://github.com/laravel/framework/pull/47279
- [10.x] Fixes failing tests running on DynamoDB Local 2.0.0 by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47653
- [10.x] Allow password reset callback to modify the result by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/47641
- Forget with collections by [@joelbutcher](https://github.com/joelbutcher) in https://github.com/laravel/framework/pull/47637
- [10.x] Do not apply global scopes when incrementing/decrementing an existing model by [@cosmastech](https://github.com/cosmastech) in https://github.com/laravel/framework/pull/47629
- [10.x] Adds inline attachments support for "notifications" markdown mailables by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/47643
- Assertions for counting outgoing mailables by [@jasonmccreary](https://github.com/jasonmccreary) in https://github.com/laravel/framework/pull/47655
- [10.x] Add getRawQueryLog() method by [@fuwasegu](https://github.com/fuwasegu) in https://github.com/laravel/framework/pull/47623
- [10.x] Fix Storage::cloud() return type by [@tattali](https://github.com/tattali) in https://github.com/laravel/framework/pull/47664
- [10.x] Add `isUrl` to the `Str` class and use it from the validator by [@GrahamCampbell](https://github.com/GrahamCampbell) in https://github.com/laravel/framework/pull/47688
- [10.x] Remove unwanted call to include stack traces by [@HazzazBinFaiz](https://github.com/HazzazBinFaiz) in https://github.com/laravel/framework/pull/47687
- [10.x] Make Vite throw a new `ManifestNotFoundException` by [@innocenzi](https://github.com/innocenzi) in https://github.com/laravel/framework/pull/47681
- [10.x] Move class from file logic in Console Kernel to dedicated method by [@CalebDW](https://github.com/CalebDW) in https://github.com/laravel/framework/pull/47665
- [10.x] Dispatch model pruning started and ended events by [@ziadoz](https://github.com/ziadoz) in https://github.com/laravel/framework/pull/47669
- [10.x] Update DatabaseRule to handle Enums for simple where clause by [@CalebDW](https://github.com/CalebDW) in https://github.com/laravel/framework/pull/47679
- [10.x] Add data_remove helper by [@PhiloNL](https://github.com/PhiloNL) in https://github.com/laravel/framework/pull/47618
- [10.x] Added tests for `isUrl` to Str. by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/47690
- [10.x] Added `isUrl` to Stringable.  by [@michaelnabil230](https://github.com/michaelnabil230) in https://github.com/laravel/framework/pull/47689
- [10.x] Tweak return type for missing config by [@sfreytag](https://github.com/sfreytag) in https://github.com/laravel/framework/pull/47702
- [10.x] Fix parallel testing without any database connection by [@deleugpn](https://github.com/deleugpn) in https://github.com/laravel/framework/pull/47705
- [10.x] Test Improvements by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/framework/pull/47709
- [10.x] Allows HTTP exceptions to be thrown for views by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/framework/pull/47714

## [v10.14.1](https://github.com/laravel/framework/compare/v10.14.0...v10.14.1) - 2023-06-28

- [10.x] Fix `Dispatcher::until` return type by @Neol3108 in https://github.com/laravel/framework/pull/47585
- [10.x] Add Collection::wrap to add method on BatchFake by @schonhoff in https://github.com/laravel/framework/pull/47589
- [10.x] Fixes grammar in FoundationServiceProvider by @adampatterson in https://github.com/laravel/framework/pull/47593
- [10.x] Ensure duration is present by @timacdonald in https://github.com/laravel/framework/pull/47596

## [v10.14.0](https://github.com/laravel/framework/compare/v10.13.5...v10.14.0) - 2023-06-27

- [10.x] Add test for `withCookies` method in RedirectResponse by @milwad-dev in https://github.com/laravel/framework/pull/47383
- [10.x] Add new error message "SSL: Handshake timed out" handling to PDO Dete… by @yehorherasymchuk in https://github.com/laravel/framework/pull/47392
- [10.x] Add new error messages for detecting lost connections by @mfn in https://github.com/laravel/framework/pull/47398
- [10.x] Update phpdoc `except` method in Middleware by @milwad-dev in https://github.com/laravel/framework/pull/47408
- [10.x] Fix inconsistent type hint for `$passwordTimeoutSeconds` by @devfrey in https://github.com/laravel/framework/pull/47414
- Change visibility of `path` method in FileStore.php by @foremtehan in https://github.com/laravel/framework/pull/47413
- [10.x] Fix return type of `buildException` method by @milwad-dev in https://github.com/laravel/framework/pull/47422
- [10.x] Allow serialization of NotificationSent by @cosmastech in https://github.com/laravel/framework/pull/47375
- [10.x] Incorrect comment in `PredisConnector` and `PhpRedisConnector` by @hungthai1401 in https://github.com/laravel/framework/pull/47438
- [10.x] Can set custom Response for denial within `Gate@inspect()` by @cosmastech in https://github.com/laravel/framework/pull/47436
- [10.x] Remove unnecessary param in `addSingletonUpdate` by @milwad-dev in https://github.com/laravel/framework/pull/47446
- [10.x] Fix return type of `prefixedResource` & `prefixedResource` by @milwad-dev in https://github.com/laravel/framework/pull/47445
- [10.x] Add Factory::getNamespace() by @tylernathanreed in https://github.com/laravel/framework/pull/47463
- [10.x] Add `whenAggregated` method to `ConditionallyLoadsAttributes` trait by @akr4m in https://github.com/laravel/framework/pull/47417
- [10.x] Add PendingRequest `withHeader()` method by @ralphjsmit in https://github.com/laravel/framework/pull/47474
- [10.x] Fix $exceptTables to allow an array of table names by @cwilby in https://github.com/laravel/framework/pull/47477
- [10.x] Fix `eachById` on `HasManyThrough` relation by @cristiancalara in https://github.com/laravel/framework/pull/47479
- [10.x] Allow object caching to be disabled for custom class casters by @CalebDW in https://github.com/laravel/framework/pull/47423
- [10.x] "Can" validation rule by @stevebauman in https://github.com/laravel/framework/pull/47371
- [10.x] refactor(Parser.php): Removing the extra "else" statement by @saMahmoudzadeh in https://github.com/laravel/framework/pull/47483
- [10.x] Add `UncompromisedVerifier::class` to `provides()` in `ValidationServiceProvider` by @xurshudyan in https://github.com/laravel/framework/pull/47500
- [9.x] Fix SES V2 Transport "reply to" addresses by @jacobmllr95 in https://github.com/laravel/framework/pull/47522
- [10.x] Reindex appends attributes by @hungthai1401 in https://github.com/laravel/framework/pull/47519
- [10.x] Fix `ListenerMakeCommand` deprecations by @dammy001 in https://github.com/laravel/framework/pull/47517
- [10.x] Add `HandlesPotentiallyTranslatedString` trait  by @xurshudyan in https://github.com/laravel/framework/pull/47488
- [10.x] update [JsonResponse]: using match expression instead of if-elseif-else by @saMahmoudzadeh in https://github.com/laravel/framework/pull/47524
- [10.x] Add `withQueryParameters` to the HTTP client by @mnapoli in https://github.com/laravel/framework/pull/47297
- [10.x] Allow `%` symbol in component attribute names by @JayBizzle in https://github.com/laravel/framework/pull/47533
- [10.x] Fix Http client pool return type by @srdante in https://github.com/laravel/framework/pull/47530
- [10.x] Use `match` expression in `resolveSynchronousFake` by @osbre in https://github.com/laravel/framework/pull/47540
- [10.x] Use `match` expression in `compileHaving` by @osbre in https://github.com/laravel/framework/pull/47548
- [10.x] Use `match` expression in `getArrayableItems` by @osbre in https://github.com/laravel/framework/pull/47549
- [10.x] Fix return type in `SessionGuard` by @PerryvanderMeer in https://github.com/laravel/framework/pull/47553
- [10.x] Fix return type in `DatabaseQueue` by @PerryvanderMeer in https://github.com/laravel/framework/pull/47552
- [10.x] Fix return type in `DumpCommand` by @PerryvanderMeer in https://github.com/laravel/framework/pull/47556
- [10.x] Fix return type in `MigrateMakeCommand` by @PerryvanderMeer in https://github.com/laravel/framework/pull/47557
- [10.x] Add missing return to `Factory` by @PerryvanderMeer in https://github.com/laravel/framework/pull/47559
- [10.x] Update doc in Eloquent model by @alirezasalehizadeh in https://github.com/laravel/framework/pull/47562
- [10.x] Fix return types by @PerryvanderMeer in https://github.com/laravel/framework/pull/47561
- [10.x] Fix PHPDoc throw type by @fernandokbs in https://github.com/laravel/framework/pull/47566
- [10.x]  Add hasAny function to ComponentAttributeBag, Allow multiple keys in has function by @indykoning in https://github.com/laravel/framework/pull/47569
- [10.x] Ensure captured time is in configured timezone by @timacdonald in https://github.com/laravel/framework/pull/47567
- [10.x] Add Method to Report only logged exceptions by @joelharkes in https://github.com/laravel/framework/pull/47554
- [10.x] Add global middleware to `Http` client by @timacdonald in https://github.com/laravel/framework/pull/47525
- [9.x] Fixes unable to use `trans()->has()` on JSON language files. by @crynobone in https://github.com/laravel/framework/pull/47582

## [v10.13.5](https://github.com/laravel/framework/compare/v10.13.3...v10.13.5) - 2023-06-08

- Revert "[10.x] Update Kernel::load() to use same `classFromFile` logic as events" by @taylorotwell in https://github.com/laravel/framework/pull/47382

## [v10.13.3](https://github.com/laravel/framework/compare/v10.13.2...v10.13.3) - 2023-06-08

### What's Changed

- Narrow down array type for `$attributes` in `CastsAttributes` by @devfrey in https://github.com/laravel/framework/pull/47365
- Add test for `assertViewHasAll` method by @milwad-dev in https://github.com/laravel/framework/pull/47366
- Fix `schedule:list` to display named Jobs by @liamkeily in https://github.com/laravel/framework/pull/47367
- Support `ConditionalRules` within `NestedRules` by @cosmastech in https://github.com/laravel/framework/pull/47344
- Small test fixes by @stevebauman in https://github.com/laravel/framework/pull/47369
- Pluralisation typo in queue:clear command output by @sebsobseb in https://github.com/laravel/framework/pull/47376
- Add getForeignKeyFrom method by @iamgergo in https://github.com/laravel/framework/pull/47378
- Add shouldHashKeys to ThrottleRequests middleware by @fosron in https://github.com/laravel/framework/pull/47368

## [v10.13.2 (2023-06-05)](https://github.com/laravel/framework/compare/v10.13.1...v10.13.2)

### Added

- Added `Illuminate/Http/Client/PendingRequest::replaceHeaders()` ([#47335](https://github.com/laravel/framework/pull/47335))
- Added `Illuminate/Notifications/Messages/MailMessage::attachMany()` ([#47345](https://github.com/laravel/framework/pull/47345))

### Reverted

- Revert "[10.x] Remove session on authenticatable deletion v2" ([#47354](https://github.com/laravel/framework/pull/47354))

### Fixed

- Fixes usage of Redis::many() with empty array ([#47307](https://github.com/laravel/framework/pull/47307))
- Fix mapped renderable exception handling ([#47347](https://github.com/laravel/framework/pull/47347))
- Avoid duplicates in fillable/guarded on merge in Illuminate/Database/Eloquent/Concerns/GuardsAttributes.php ([#47351](https://github.com/laravel/framework/pull/47351))

### Changed

- Update Kernel::load() to use same classFromFile logic as events ([#47327](https://github.com/laravel/framework/pull/47327))
- Remove redundant 'setAccessible' methods ([#47348](https://github.com/laravel/framework/pull/47348))

## [v10.13.1 (2023-06-02)](https://github.com/laravel/framework/compare/v10.13.0...v10.13.1)

### Added

- Added `Illuminate\Contracts\Database\Query\ConditionExpression` interface and functional for this ([#47210](https://github.com/laravel/framework/pull/47210))
- Added return type for `Illuminate/Notifications/Channels/MailChannel::send()` ([#47310](https://github.com/laravel/framework/pull/47310))

### Reverted

- Revert "[10.x] Fix inconsistency between report and render methods" ([#47326](https://github.com/laravel/framework/pull/47326))

### Changed

- Display queue runtime in human readable format ([#47227](https://github.com/laravel/framework/pull/47227))

## [v10.13.0 (2023-05-30)](https://github.com/laravel/framework/compare/v10.12.0...v10.13.0)

### Added

- Added `Illuminate/Hashing/HashManager::isHashed()` ([#47197](https://github.com/laravel/framework/pull/47197))
- Escaping functionality within the Grammar ([#46558](https://github.com/laravel/framework/pull/46558))
- Provide testing hooks in `Illuminate/Support/Sleep.php` ([#47228](https://github.com/laravel/framework/pull/47228))
- Added missing methods to AssertsStatusCodes ([#47277](https://github.com/laravel/framework/pull/47277))
- Wrap response preparation in events ([#47229](https://github.com/laravel/framework/pull/47229))

### Fixed

- Fixed bug when function wrapped around definition of related factory ([#47168](https://github.com/laravel/framework/pull/47168))
- Fixed inconsistency between report and render methods ([#47201](https://github.com/laravel/framework/pull/47201))
- Fixes Model::isDirty() when AsCollection or AsEncryptedCollection have arguments ([#47235](https://github.com/laravel/framework/pull/47235))
- Fixed escaped String for JSON_CONTAINS ([#47244](https://github.com/laravel/framework/pull/47244))
- Fixes missing output on ProcessFailedException exception ([#47285](https://github.com/laravel/framework/pull/47285))

### Changed

- Remove useless else statements ([#47186](https://github.com/laravel/framework/pull/47186))
- RedisStore improvement - don't open transaction unless all values are serialaizable ([#47193](https://github.com/laravel/framework/pull/47193))
- Use carbon::now() to get current timestamp in takeUntilTimeout lazycollection-method ([#47200](https://github.com/laravel/framework/pull/47200))
- Avoid duplicates in visible/hidden on merge ([#47264](https://github.com/laravel/framework/pull/47264))
- Add a missing semicolon to CompilesClasses ([#47280](https://github.com/laravel/framework/pull/47280))
- Send along value to InvalidPayloadException ([#47223](https://github.com/laravel/framework/pull/47223))

## [v10.12.0 (2023-05-23)](https://github.com/laravel/framework/compare/v10.11.0...v10.12.0)

### Added

- Added `Illuminate/Queue/Events/JobTimedOut.php` ([#47068](https://github.com/laravel/framework/pull/47068))
- Added `when()` and `unless()` methods to `Illuminate/Support/Sleep` ([#47114](https://github.com/laravel/framework/pull/47114))
- Adds inline attachments support for markdown mailables ([#47140](https://github.com/laravel/framework/pull/47140))
- Added `Illuminate/Testing/Concerns/AssertsStatusCodes::assertMethodNotAllowed()` ([#47169](https://github.com/laravel/framework/pull/47169))
- Added `forceCreateQuietly` method ([#47162](https://github.com/laravel/framework/pull/47162))
- Added parameters to timezone validation rule ([#47171](https://github.com/laravel/framework/pull/47171))

### Fixed

- Fixes singleton and api singletons creatable|destryoable|only|except combinations ([#47098](https://github.com/laravel/framework/pull/47098))
- Don't use empty key or secret for DynamoDBClient ([#47144](https://github.com/laravel/framework/pull/47144))

### Changed

- Remove session on authenticatable deletion ([#47141](https://github.com/laravel/framework/pull/47141))
- Added error handling and ensure re-enabling of foreign key constraints in `Illuminate/Database/Schema/Builder::withoutForeignKeyConstraints()` ([#47182](https://github.com/laravel/framework/pull/47182))

### Refactoring

- Remove useless else statements ([#47161](https://github.com/laravel/framework/pull/47161))

## [v10.11.0 (2023-05-16)](https://github.com/laravel/framework/compare/v10.10.1...v10.11.0)

### Added

- Added the ability to extend the generic types for DatabaseNotificationCollection ([#47048](https://github.com/laravel/framework/pull/47048))
- Added `/Illuminate/Support/Carbon::createFromId()` ([#47046](https://github.com/laravel/framework/pull/47046))
- Added Name attributes on slots ([#47065](https://github.com/laravel/framework/pull/47065))
- Added Precognition-Success header ([#47081](https://github.com/laravel/framework/pull/47081))
- Added Macroable trait to Sleep class ([#47099](https://github.com/laravel/framework/pull/47099))

### Fixed

- Fixed `Illuminate/Database/Console/ShowModelCommand::getPolicy()` ([#47043](https://github.com/laravel/framework/pull/47043))

### Changed

- Remove return from channelRoutes method ([#47059](https://github.com/laravel/framework/pull/47059))
- Bug in `Illuminate/Database/Migrations/Migrator::reset()` with string path ([#47047](https://github.com/laravel/framework/pull/47047))
- Unify logic around cursor paginate ([#47094](https://github.com/laravel/framework/pull/47094))
- Clears resolved instance of Vite when using withoutVite ([#47091](https://github.com/laravel/framework/pull/47091))
- Remove workarounds for old Guzzle versions ([#47084](https://github.com/laravel/framework/pull/47084))

## [v10.10.1 (2023-05-11)](https://github.com/laravel/framework/compare/v10.10.0...v10.10.1)

### Added

- Added `/Illuminate/Collections/Arr::mapWithKeys()` ([#47000](https://github.com/laravel/framework/pull/47000))
- Added `dd` and `dump` methods to `Illuminate/Support/Carbon.php` ([#47002](https://github.com/laravel/framework/pull/47002))
- Added `Illuminate/Queue/Failed/FileFailedJobProvider` ([#47007](https://github.com/laravel/framework/pull/47007))
- Added arguments to the signed middleware to ignore properties ([#46987](https://github.com/laravel/framework/pull/46987))

### Fixed

- Added keys length check to prevent mget error in `Illuminate/Cache/RedisStore::many()` ([#46998](https://github.com/laravel/framework/pull/46998))
- 'hashed' cast - do not rehash already hashed value ([#47029](https://github.com/laravel/framework/pull/47029))

### Changed

- Used `Carbon::now()` instead of `now()` ([#47017](https://github.com/laravel/framework/pull/47017))
- Use file locks when writing failed jobs to disk ([b822d28](https://github.com/laravel/framework/commit/b822d2810d29ab1aedf667abc76ed969d28bbaf5))
- Raise visibility of Mailable prepareMailableForDelivery() ([#47031](https://github.com/laravel/framework/pull/47031))

## [v10.10.0 (2023-05-09)](https://github.com/laravel/framework/compare/v10.9.0...v10.10.0)

### Added

- Added `$isolated` and `isolatedExitCode` properties to `Illuminate/Console/Command` ([#46925](https://github.com/laravel/framework/pull/46925))
- Added ability to restore/set Global Scopes ([#46922](https://github.com/laravel/framework/pull/46922))
- Added `Illuminate/Collections/Arr::sortRecursiveDesc()` ([#46945](https://github.com/laravel/framework/pull/46945))
- Added `Illuminate/Support/Sleep` ([#46904](https://github.com/laravel/framework/pull/46904), [#46963](https://github.com/laravel/framework/pull/46963))
- Added `Illuminate/Database/Eloquent/Concerns/HasAttributes::castAttributeAsHashedString()` ([#46947]https://github.com/laravel/framework/pull/46947)
- Added url support for mail config ([#46964](https://github.com/laravel/framework/pull/46964))

### Fixed

- Fixed replace missing_unless ([89ac58a](https://github.com/laravel/framework/commit/89ac58aa9b4fb7ef9f3b2290921488da1454ed30))
- Gracefully handle invalid code points in e() ([#46914](https://github.com/laravel/framework/pull/46914))
- HasCasts returning false instead of true ([#46992](https://github.com/laravel/framework/pull/46992))

### Changed

- Use method on UploadedFile to validate image dimensions ([#46912](https://github.com/laravel/framework/pull/46912))
- Expose Js::json() helper ([#46935](https://github.com/laravel/framework/pull/46935))
- Respect parents on middleware priority ([#46972](https://github.com/laravel/framework/pull/46972))
- Do reconnect when redis throws connection lost error ([#46989](https://github.com/laravel/framework/pull/46989))
- Throw timeoutException instead of maxAttemptsExceededException when a job times out ([#46968](https://github.com/laravel/framework/pull/46968))

## [v10.9.0 (2023-04-25)](https://github.com/laravel/framework/compare/v10.8.0...v10.9.0)

### Added

- Add new HTTP status assertions ([#46841](https://github.com/laravel/framework/pull/46841))
- Allow pruning all cancelled and unfinished queue batches ([#46833](https://github.com/laravel/framework/pull/46833))
- Added `IGNITION_LOCAL_SITES_PATH` to `$passthroughVariables` in `ServeCommand.php` ([#46857](https://github.com/laravel/framework/pull/46857))
- Added named static methods for middleware ([#46362](https://github.com/laravel/framework/pull/46362))

### Fixed

- Fix date_format rule throw ValueError ([#46824](https://github.com/laravel/framework/pull/46824))

### Changed

- Allow separate directory for locks on filestore ([#46811](https://github.com/laravel/framework/pull/46811))
- Allow to whereMorphedTo work with null model ([#46821](https://github.com/laravel/framework/pull/46821))
- Use pivot model fromDateTime instead of assuming Carbon in `Illuminate/Database/Eloquent/Relations/Concerns/InteractsWithPivotTable::addTimestampsToAttachment()` ([#46822](https://github.com/laravel/framework/pull/46822))
- Make rules method in FormRequest optional ([#46846](https://github.com/laravel/framework/pull/46846))
- Throw LogicException when calling FileFactory@image() if mimetype is not supported ([#46859](https://github.com/laravel/framework/pull/46859))
- Improve job release method to accept date instance ([#46854](https://github.com/laravel/framework/pull/46854))
- Use foreignUlid if model uses HasUlids trait when call foreignIdFor ([#46876](https://github.com/laravel/framework/pull/46876))

## [v10.8.0 (2023-04-18)](https://github.com/laravel/framework/compare/v10.7.1...v10.8.0)

### Added

- Added syntax sugar to the Process::pipe method ([#46745](https://github.com/laravel/framework/pull/46745))
- Allow specifying index name when calling ForeignIdColumnDefinition@constrained() ([#46746](https://github.com/laravel/framework/pull/46746))
- Allow to customise redirect URL in AuthenticateSession Middleware ([#46752](https://github.com/laravel/framework/pull/46752))
- Added Class based after validation rules ([#46757](https://github.com/laravel/framework/pull/46757))
- Added max exceptions to broadcast event ([#46800](https://github.com/laravel/framework/pull/46800))

### Fixed

- Fixed compiled view file ends with .php ([#46755](https://github.com/laravel/framework/pull/46755))
- Fix validation rule names ([#46768](https://github.com/laravel/framework/pull/46768))
- Fixed validateDecimal() ([#46809](https://github.com/laravel/framework/pull/46809))

### Changed

- Add headers to exception in `Illuminate/Foundation/Application::abourd()` ([#46780](https://github.com/laravel/framework/pull/46780))
- Minor skeleton slimming (framework edition) ([#46786](https://github.com/laravel/framework/pull/46786))
- Release lock for job implementing ShouldBeUnique that is dispatched afterResponse() ([#46806](https://github.com/laravel/framework/pull/46806))

## [v10.7.1 (2023-04-11)](https://github.com/laravel/framework/compare/v10.7.0...v10.7.1)

### Changed

- Changed `Illuminate/Process/Factory::pipe()` method. It will be run pipes immediately ([e34ab39](https://github.com/laravel/framework/commit/e34ab392800bfc175334c90e9321caa7261c2d65))

## [v10.7.0 (2023-04-11)](https://github.com/laravel/framework/compare/v10.6.2...v10.7.0)

### Added

- Allow `Illuminate/Foundation/Testing/WithFaker` to be used when app is not bound ([#46529](https://github.com/laravel/framework/pull/46529))
- Allow Event::assertListening to check for invokable event listeners ([#46683](https://github.com/laravel/framework/pull/46683))
- Added `Illuminate/Process/Factory::pipe()` ([#46527](https://github.com/laravel/framework/pull/46527))
- Added `Illuminate/Validation/Validator::setValue` ([#46716](https://github.com/laravel/framework/pull/46716))

### Fixed

- PHP 8.0 fix for Closure jobs ([#46505](https://github.com/laravel/framework/pull/46505))
- Fix preg_split error when there is a slash in the attribute in `Illuminate/Validation/ValidationData` ([#46549](https://github.com/laravel/framework/pull/46549))
- Fixed Cache::spy incompatibility with Cache::get ([#46689](https://github.com/laravel/framework/pull/46689))
- server command: Fixed server Closing output on invalid $requestPort ([#46726](https://github.com/laravel/framework/pull/46726))
- Fix nested join when not JoinClause instance ([#46712](https://github.com/laravel/framework/pull/46712))
- Fix query builder whereBetween method with carbon date period ([#46720](https://github.com/laravel/framework/pull/46720))

### Changed

- Removes unnecessary parameters in `creatable()` / `destroyable()` methods in `Illuminate/Routing/PendingSingletonResourceRegistration` ([#46677](https://github.com/laravel/framework/pull/46677))
- Return non-zero exit code for uncaught exceptions ([#46541](https://github.com/laravel/framework/pull/46541))

## [v10.6.2 (2023-04-05)](https://github.com/laravel/framework/compare/v10.6.1...v10.6.2)

### Added

- Added trait `Illuminate/Foundation/Testing/WithConsoleEvents` ([#46694](https://github.com/laravel/framework/pull/46694))

### Changed

- Added missing ignored methods to `Illuminate/View/Component` ([#46692](https://github.com/laravel/framework/pull/46692))
- console.stub: remove void return type from handle ([#46697](https://github.com/laravel/framework/pull/46697))

## [v10.6.1 (2023-04-04)](https://github.com/laravel/framework/compare/v10.6.0...v10.6.1)

### Reverted

- Reverted ["Set container instance on session manager"Set container instance on session manager](https://github.com/laravel/framework/pull/46621) ([#46691](https://github.com/laravel/framework/pull/46691))

## [v10.6.0 (2023-04-04)](https://github.com/laravel/framework/compare/v10.5.1...v10.6.0)

### Added

- Added ability to set a custom class for the AsCollection and AsEncryptedCollection casts ([#46619](https://github.com/laravel/framework/pull/46619))

### Changed

- Set container instance on session manager ([#46621](https://github.com/laravel/framework/pull/46621))
- Added empty string definition to Str::squish function ([#46660](https://github.com/laravel/framework/pull/46660))
- Allow $sleepMilliseconds parameter receive a Closure in retry method from PendingRequest ([#46653](https://github.com/laravel/framework/pull/46653))
- Support contextual binding on first class callables ([de8d515](https://github.com/laravel/framework/commit/de8d515fc6d1fabc8f14450342554e0eb67df725), [e511a3b](https://github.com/laravel/framework/commit/e511a3bdb15c294866428b4fe665a4ad14540038))

## [v10.5.1 (2023-03-29)](https://github.com/laravel/framework/compare/v10.5.0...v10.5.1)

### Added

- Added methods to determine if API resource has pivot loaded ([#46555](https://github.com/laravel/framework/pull/46555))
- Added caseSensitive flag to Stringable replace function ([#46578](https://github.com/laravel/framework/pull/46578))
- Allow insert..select (insertUsing()) to have empty $columns ([#46605](https://github.com/laravel/framework/pull/46605), [399bff9](https://github.com/laravel/framework/commit/399bff9331252e64a3439ea43e05f87f901dad55))
- Added `Illuminate/Database/Connection::selectResultSets()` ([#46592](https://github.com/laravel/framework/pull/46592))

### Changed

- Make sure pivot model has previously defined values ([#46559](https://github.com/laravel/framework/pull/46559))
- Move SetUniqueIds to run before the creating event ([#46622](https://github.com/laravel/framework/pull/46622))

## [v10.5.0 (2023-03-28)](https://github.com/laravel/framework/compare/v10.4.1...v10.5.0)

### Added

- Added `Illuminate/Cache/CacheManager::setApplication()` ([#46594](https://github.com/laravel/framework/pull/46594))

### Fixed

- Fix infinite loading on batches list on Horizon ([#46536](https://github.com/laravel/framework/pull/46536))
- Fix whereNull queries with raw expressions for the MySql grammar ([#46538](https://github.com/laravel/framework/pull/46538))
- Fix getDirty method when using AsEnumArrayObject / AsEnumCollection ([#46561](https://github.com/laravel/framework/pull/46561))

### Changed

- Skip `Illuminate/Support/Reflector::isParameterBackedEnumWithStringBackingType` for non ReflectionNamedType ([#46511](https://github.com/laravel/framework/pull/46511))
- Replace Deprecated DBAL Comparator creation with schema aware Comparator ([#46517](https://github.com/laravel/framework/pull/46517))
- Added Storage::json() method to read and decode a json file ([#46548](https://github.com/laravel/framework/pull/46548))
- Force cast json decoded failed_job_ids to array in DatabaseBatchRepository ([#46581](https://github.com/laravel/framework/pull/46581))
- Handle empty arrays for DynamoDbStore multi-key operations ([#46579](https://github.com/laravel/framework/pull/46579))
- Stop adding constraints twice on *Many to *One relationships via one() ([#46575](https://github.com/laravel/framework/pull/46575))
- allow override of the Builder paginate() total ([#46415](https://github.com/laravel/framework/pull/46415))
- Add a possibility to set a custom on_stats function for the Http Facade ([#46569](https://github.com/laravel/framework/pull/46569))

## [v10.4.1 (2023-03-18)](https://github.com/laravel/framework/compare/v10.4.0...v10.4.1)

### Changed

- Move Symfony events dispatcher registration to Console\Kernel ([#46508](https://github.com/laravel/framework/pull/46508))

## [v10.4.0 (2023-03-17)](https://github.com/laravel/framework/compare/v10.3.3...v10.4.0)

### Added

- Added `Illuminate/Testing/Concerns/AssertsStatusCodes::assertUnsupportedMediaType()` ([#46426](https://github.com/laravel/framework/pull/46426))
- Added curl_error_code: 77 to DetectsLostConnections ([#46429](https://github.com/laravel/framework/pull/46429))
- Allow for converting a HasMany to HasOne && MorphMany to MorphOne ([#46443](https://github.com/laravel/framework/pull/46443))
- Add option to create macroable method for paginationInformation ([#46461](https://github.com/laravel/framework/pull/46461))
- Added `Illuminate/Filesystem/Filesystem::json()` ([#46481](https://github.com/laravel/framework/pull/46481))

### Fixed

- Fix parsed input arguments for command events using dispatcher rerouting ([#46442](https://github.com/laravel/framework/pull/46442))
- Fix enums uses with optional implicit parameters ([#46483](https://github.com/laravel/framework/pull/46483))
- Fix deprecations for embedded images in symfony mailer ([#46488](https://github.com/laravel/framework/pull/46488))

### Changed

- Added alternative database port in Postgres DSN ([#46403](https://github.com/laravel/framework/pull/46403))
- Allow calling getControllerClass on closure-based routes ([#46411](https://github.com/laravel/framework/pull/46411))
- Remove obsolete method_exists(ReflectionClass::class, 'isEnum') call ([#46445](https://github.com/laravel/framework/pull/46445))
- Convert eloquent builder to base builder in whereExists ([#46460](https://github.com/laravel/framework/pull/46460))
- Refactor shared static methodExcludedByOptions method to trait ([#46498](https://github.com/laravel/framework/pull/46498))

## [v10.3.3 (2023-03-09)](https://github.com/laravel/framework/compare/v10.3.2...v10.3.3)

### Reverted

- Reverted ["Allow override of the Builder paginate() total"](https://github.com/laravel/framework/pull/46336) ([#46406](https://github.com/laravel/framework/pull/46406))

## [v10.3.2 (2023-03-08)](https://github.com/laravel/framework/compare/v10.3.1...v10.3.2)

### Reverted

- Reverted ["FIX on CanBeOneOfMany trait giving erroneous results"](https://github.com/laravel/framework/pull/46309) ([#46402](https://github.com/laravel/framework/pull/46402))

### Fixed

- Fixes Expression no longer implements Stringable ([#46395](https://github.com/laravel/framework/pull/46395))

## [v10.3.1 (2023-03-08)](https://github.com/laravel/framework/compare/v10.3.0...v10.3.1)

### Reverted

- Reverted ["Use fallback when previous URL is the same as the current in `Illuminate/Routing/UrlGenerator::previous()`"](https://github.com/laravel/framework/pull/46234) ([#46392](https://github.com/laravel/framework/pull/46392))

## [v10.3.0 (2023-03-07)](https://github.com/laravel/framework/compare/v10.2.0...v10.3.0)

### Added

- Adding Pipeline Facade ([#46271](https://github.com/laravel/framework/pull/46271))
- Add Support for SaveQuietly and Upsert with UUID/ULID Primary Keys ([#46161](https://github.com/laravel/framework/pull/46161))
- Add charAt method to both Str and Stringable ([#46349](https://github.com/laravel/framework/pull/46349), [dfb59bc2](https://github.com/laravel/framework/commit/dfb59bc263a4e28ac8992deeabd2ccd9392d1681))
- Adds Countable to the InvokedProcessPool class ([#46346](https://github.com/laravel/framework/pull/46346))
- Add processors to logging (placeholders) ([#46344](https://github.com/laravel/framework/pull/46344))

### Fixed

- Fixed `Illuminate/Mail/Mailable::buildMarkdownView()` ([791f8ea7](https://github.com/laravel/framework/commit/791f8ea70b5872ae4483a32f6aeb28dd2ed4b8d7))
- FIX on CanBeOneOfMany trait giving erroneous results ([#46309](https://github.com/laravel/framework/pull/46309))

### Changed

- Use fallback when previous URL is the same as the current in `Illuminate/Routing/UrlGenerator::previous()` ([#46234](https://github.com/laravel/framework/pull/46234))
- Allow override of the Builder paginate() total ([#46336](https://github.com/laravel/framework/pull/46336))

## [v10.2.0 (2023-03-02)](https://github.com/laravel/framework/compare/v10.1.5...v10.2.0)

### Added

- Adding `Conditionable` train to Logger ([#46259](https://github.com/laravel/framework/pull/46259))
- Added "dot" method to Illuminate\Support\Collection class ([#46265](https://github.com/laravel/framework/pull/46265))
- Added a "channel:list" command ([#46248](https://github.com/laravel/framework/pull/46248))
- Added JobPopping and JobPopped events ([#46220](https://github.com/laravel/framework/pull/46220))
- Add isMatch method to Str and Stringable helpers ([#46303](https://github.com/laravel/framework/pull/46303))
- Add ArrayAccess to Stringable ([#46279](https://github.com/laravel/framework/pull/46279))

### Reverted

- Revert "[10.x] Fix custom themes not resetting on Markdown renderer" ([#46328](https://github.com/laravel/framework/pull/46328))

### Fixed

- Fix typo in function `createMissingSqliteDatbase` name in `src/Illuminate/Database/Console/Migrations/MigrateCommand.php` ([#46326](https://github.com/laravel/framework/pull/46326))

### Changed

- Generate default command name based on class name in `ConsoleMakeCommand` ([#46256](https://github.com/laravel/framework/pull/46256))
- Do not mutate underlying values on redirect ([#46281](https://github.com/laravel/framework/pull/46281))
- Do not use null to initialise $lastExecutionStartedAt in `ScheduleWorkCommand` ([#46285](https://github.com/laravel/framework/pull/46285))
- Remove obsolete function_exists('enum_exists') calls ([#46319](https://github.com/laravel/framework/pull/46319))
- Cast json decoded failed_job_ids to array in DatabaseBatchRepository::toBatch ([#46329](https://github.com/laravel/framework/pull/46329))

## [v10.1.5 (2023-02-24)](https://github.com/laravel/framework/compare/v10.1.4...v10.1.5)

### Fixed

- Fixed `Illuminate/Foundation/Testing/Concerns/InteractsWithDatabase::expectsDatabaseQueryCount()` $connection parameter ([#46228](https://github.com/laravel/framework/pull/46228))
- Fixed Facade Fake ([#46257](https://github.com/laravel/framework/pull/46257))

### Changed

- Remove autoload dumping from make:migration ([#46215](https://github.com/laravel/framework/pull/46215))

## [v10.1.4 (2023-02-23)](https://github.com/laravel/framework/compare/v10.1.3...v10.1.4)

### Changed

- Improve Facade Fake Awareness ([#46188](https://github.com/laravel/framework/pull/46188), [#46232](https://github.com/laravel/framework/pull/46232))

## [v10.1.3 (2023-02-22)](https://github.com/laravel/framework/compare/v10.1.2...v10.1.3)

### Added

- Added protected method `Illuminate/Http/Resources/Json/JsonResource::newCollection()` for simplifies collection customisation ([#46217](https://github.com/laravel/framework/pull/46217))

### Fixed

- Fixes constructable migrations ([#46223](https://github.com/laravel/framework/pull/46223))

### Changes

- Accept time when generating ULID in `Str::ulid()` ([#46201](https://github.com/laravel/framework/pull/46201))

## [v10.1.2 (2023-02-22)](https://github.com/laravel/framework/compare/v10.1.1...v10.1.2)

### Reverted

- Revert changes from `Arr::random()` ([cf3eb90](https://github.com/laravel/framework/commit/cf3eb90a6473444bb7a78d1a3af1e9312a62020d))

## [v10.1.1 (2023-02-21)](https://github.com/laravel/framework/compare/v10.1.0...v10.1.1)

### Added

- Add the ability to re-resolve cache drivers ([#46203](https://github.com/laravel/framework/pull/46203))

### Fixed

- Fixed `Illuminate/Collections/Arr::shuffle()` for empty array ([0c6cae0](https://github.com/laravel/framework/commit/0c6cae0ef647158b9554cad05ff39db7e7ad0d33))

## [v10.1.0 (2023-02-21)](https://github.com/laravel/framework/compare/v10.0.3...v10.1.0)

### Fixed

- Fixing issue where 0 is discarded as a valid timestamp ([#46158](https://github.com/laravel/framework/pull/46158))
- Fix custom themes not resetting on Markdown renderer ([#46200](https://github.com/laravel/framework/pull/46200))

### Changed

- Use secure randomness in Arr:random and Arr:shuffle ([#46105](https://github.com/laravel/framework/pull/46105))
- Use mixed return type on controller stubs ([#46166](https://github.com/laravel/framework/pull/46166))
- Use InteractsWithDictionary in Eloquent collection ([#46196](https://github.com/laravel/framework/pull/46196))

## [v10.0.3 (2023-02-17)](https://github.com/laravel/framework/compare/v10.0.2...v10.0.3)

### Added

- Added missing expression support for pluck in Builder ([#46146](https://github.com/laravel/framework/pull/46146))

## [v10.0.2 (2023-02-16)](https://github.com/laravel/framework/compare/v10.0.1...v10.0.2)

### Added

- Register policies automatically to the gate ([#46132](https://github.com/laravel/framework/pull/46132))

## [v10.0.1 (2023-02-16)](https://github.com/laravel/framework/compare/v10.0.0...v10.0.1)

### Added

- Standard Input can be applied to PendingProcess ([#46119](https://github.com/laravel/framework/pull/46119))

### Fixed

- Fix Expression string casting ([#46137](https://github.com/laravel/framework/pull/46137))

### Changed

- Add AddQueuedCookiesToResponse to middlewarePriority so it is handled in the right place ([#46130](https://github.com/laravel/framework/pull/46130))
- Show queue connection in MonitorCommand ([#46122](https://github.com/laravel/framework/pull/46122))

## [v10.0.0 (2023-02-14)](https://github.com/laravel/framework/compare/v10.0.0...10.x)

Please consult the [upgrade guide](https://laravel.com/docs/10.x/upgrade) and [release notes](https://laravel.com/docs/10.x/releases) in the official Laravel documentation.
=======
## v11.0.0 - 2024-03-12

Check the upgrade guide in the [Official Laravel Upgrade Documentation](https://laravel.com/docs/11.x/upgrade). Also you can see some release notes in the [Official Laravel Release Documentation](https://laravel.com/docs/11.x/releases).
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
