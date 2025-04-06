# Deprecations

<<<<<<< HEAD
=======
## Hard Deprecations

This functionality is currently [hard-deprecated](https://phpunit.de/backward-compatibility.html#hard-deprecation):

### Writing Tests

#### Assertions, Constraints, and Expectations

| Issue                                                             | Description                                  | Since  | Replacement                                                                                                                                                                                               |
|-------------------------------------------------------------------|----------------------------------------------|--------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [#5472](https://github.com/sebastianbergmann/phpunit/issues/5472) | `Assert::assertStringNotMatchesFormat()`     | 10.4.0 |                                                                                                                                                                                                           |
| [#5472](https://github.com/sebastianbergmann/phpunit/issues/5472) | `Assert::assertStringNotMatchesFormatFile()` | 10.4.0 |                                                                                                                                                                                                           |

#### Test Double API

| Issue                                                             | Description                                                                    | Since  | Replacement                                                                             |
|-------------------------------------------------------------------|--------------------------------------------------------------------------------|--------|-----------------------------------------------------------------------------------------|
| [#5240](https://github.com/sebastianbergmann/phpunit/issues/5240) | `TestCase::createTestProxy()`                                                  | 10.1.0 |                                                                                         |
| [#5241](https://github.com/sebastianbergmann/phpunit/issues/5241) | `TestCase::getMockForAbstractClass()`                                          | 10.1.0 |                                                                                         |
| [#5242](https://github.com/sebastianbergmann/phpunit/issues/5242) | `TestCase::getMockFromWsdl()`                                                  | 10.1.0 |                                                                                         |
| [#5243](https://github.com/sebastianbergmann/phpunit/issues/5243) | `TestCase::getMockForTrait()`                                                  | 10.1.0 |                                                                                         |
| [#5244](https://github.com/sebastianbergmann/phpunit/issues/5244) | `TestCase::getObjectForTrait()`                                                | 10.1.0 |                                                                                         |
| [#5305](https://github.com/sebastianbergmann/phpunit/issues/5305) | `MockBuilder::getMockForAbstractClass()`                                       | 10.1.0 |                                                                                         |
| [#5306](https://github.com/sebastianbergmann/phpunit/issues/5306) | `MockBuilder::getMockForTrait()`                                               | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::disableProxyingToOriginalMethods()`                              | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::enableProxyingToOriginalMethods()`                               | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::setProxyTarget()`                                                | 10.1.0 |                                                                                         |
| [#5308](https://github.com/sebastianbergmann/phpunit/issues/5308) | `MockBuilder::allowMockingUnknownTypes()`                                      | 10.1.0 |                                                                                         |
| [#5308](https://github.com/sebastianbergmann/phpunit/issues/5308) | `MockBuilder::disallowMockingUnknownTypes()`                                   | 10.1.0 |                                                                                         |
| [#5309](https://github.com/sebastianbergmann/phpunit/issues/5309) | `MockBuilder::disableAutoload()`                                               | 10.1.0 |                                                                                         |
| [#5309](https://github.com/sebastianbergmann/phpunit/issues/5309) | `MockBuilder::enableAutoload()`                                                | 10.1.0 |                                                                                         |
| [#5315](https://github.com/sebastianbergmann/phpunit/issues/5315) | `MockBuilder::disableArgumentCloning()`                                        | 10.1.0 |                                                                                         |
| [#5315](https://github.com/sebastianbergmann/phpunit/issues/5315) | `MockBuilder::enableArgumentCloning()`                                         | 10.1.0 |                                                                                         |
| [#5320](https://github.com/sebastianbergmann/phpunit/issues/5320) | `MockBuilder::addMethods()`                                                    | 10.1.0 |                                                                                         |
| [#5415](https://github.com/sebastianbergmann/phpunit/issues/5415) | Support for doubling interfaces (or classes) that have a method named `method` | 11.0.0 |                                                                                         |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::onConsecutiveCalls()`                                               | 10.3.0 | Use `$double->willReturn()` instead of `$double->will($this->onConsecutiveCalls())`     |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnArgument()`                                                   | 10.3.0 | Use `$double->willReturnArgument()` instead of `$double->will($this->returnArgument())` |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnCallback()`                                                   | 10.3.0 | Use `$double->willReturnCallback()` instead of `$double->will($this->returnCallback())` |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnSelf()`                                                       | 10.3.0 | Use `$double->willReturnSelf()` instead of `$double->will($this->returnSelf())`         |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnValue()`                                                      | 10.3.0 | Use `$double->willReturn()` instead of `$double->will($this->returnValue())`            |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnValueMap()`                                                   | 10.3.0 | Use `$double->willReturnMap()` instead of `$double->will($this->returnValueMap())`      |
| [#5535](https://github.com/sebastianbergmann/phpunit/issues/5525) | Configuring expectations using `expects()` on test stubs                       | 11.0.0 | Create a mock object when you need to configure expectations on a test double           |

### Running Tests

| Issue                                                             | Description                                                                                                                           | Since  | Replacement                                                                                        |
|-------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------|--------|----------------------------------------------------------------------------------------------------|
| [#5689](https://github.com/sebastianbergmann/phpunit/issues/5689) | `restrictDeprecations` attribute on the `<source>` element of the XML configuration file                                              | 11.1.0 | Use `ignoreSelfDeprecations`, `ignoreDirectDeprecations`, and `ignoreIndirectDeprecations` instead |
| [#5709](https://github.com/sebastianbergmann/phpunit/issues/5709) | Support for using comma-separated values with the `--group`, `--exclude-group`, `--covers`, `--uses`, and `--test-suffix` CLI options | 11.1.0 | Use `--group foo --group bar` instead of `--group foo,bar`, for example                            |

#### Miscellaneous

| Issue                                                             | Description                                                 | Since  | Replacement                                                                             |
|-------------------------------------------------------------------|-------------------------------------------------------------|--------|-----------------------------------------------------------------------------------------|
| [#4505](https://github.com/sebastianbergmann/phpunit/issues/4505) | Metadata in doc-comments                                    | 10.3.0 | Metadata in attributes                                                                  |
| [#5214](https://github.com/sebastianbergmann/phpunit/issues/5214) | `TestCase::iniSet()`                                        | 10.3.0 |                                                                                         |
| [#5216](https://github.com/sebastianbergmann/phpunit/issues/5216) | `TestCase::setLocale()`                                     | 10.3.0 |                                                                                         |
| [#5800](https://github.com/sebastianbergmann/phpunit/issues/5800) | Targeting traits with `#[CoversClass]` and `#[UsesClass]`   | 11.2.0 | `#[CoversClass]` and `#[UsesClass]` also target the traits used by the targeted classes |

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
## Soft Deprecations

This functionality is currently [soft-deprecated](https://phpunit.de/backward-compatibility.html#soft-deprecation):

### Writing Tests

#### Assertions, Constraints, and Expectations

<<<<<<< HEAD
| Issue                                                             | Description                                    | Since  | Replacement |
|-------------------------------------------------------------------|------------------------------------------------|--------|-------------|
| [#5472](https://github.com/sebastianbergmann/phpunit/issues/5472) | `TestCase::assertStringNotMatchesFormat()`     | 10.4.0 |             |
| [#5472](https://github.com/sebastianbergmann/phpunit/issues/5472) | `TestCase::assertStringNotMatchesFormatFile()` | 10.4.0 |             |

#### Test Double API

| Issue                                                             | Description                                       | Since  | Replacement                                                                             |
|-------------------------------------------------------------------|---------------------------------------------------|--------|-----------------------------------------------------------------------------------------|
| [#5240](https://github.com/sebastianbergmann/phpunit/issues/5240) | `TestCase::createTestProxy()`                     | 10.1.0 |                                                                                         |
| [#5241](https://github.com/sebastianbergmann/phpunit/issues/5241) | `TestCase::getMockForAbstractClass()`             | 10.1.0 |                                                                                         |
| [#5242](https://github.com/sebastianbergmann/phpunit/issues/5242) | `TestCase::getMockFromWsdl()`                     | 10.1.0 |                                                                                         |
| [#5243](https://github.com/sebastianbergmann/phpunit/issues/5243) | `TestCase::getMockForTrait()`                     | 10.1.0 |                                                                                         |
| [#5244](https://github.com/sebastianbergmann/phpunit/issues/5244) | `TestCase::getObjectForTrait()`                   | 10.1.0 |                                                                                         |
| [#5305](https://github.com/sebastianbergmann/phpunit/issues/5305) | `MockBuilder::getMockForAbstractClass()`          | 10.1.0 |                                                                                         |
| [#5306](https://github.com/sebastianbergmann/phpunit/issues/5306) | `MockBuilder::getMockForTrait()`                  | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::disableProxyingToOriginalMethods()` | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::enableProxyingToOriginalMethods()`  | 10.1.0 |                                                                                         |
| [#5307](https://github.com/sebastianbergmann/phpunit/issues/5307) | `MockBuilder::setProxyTarget()`                   | 10.1.0 |                                                                                         |
| [#5308](https://github.com/sebastianbergmann/phpunit/issues/5308) | `MockBuilder::allowMockingUnknownTypes()`         | 10.1.0 |                                                                                         |
| [#5308](https://github.com/sebastianbergmann/phpunit/issues/5308) | `MockBuilder::disallowMockingUnknownTypes()`      | 10.1.0 |                                                                                         |
| [#5309](https://github.com/sebastianbergmann/phpunit/issues/5309) | `MockBuilder::disableAutoload()`                  | 10.1.0 |                                                                                         |
| [#5309](https://github.com/sebastianbergmann/phpunit/issues/5309) | `MockBuilder::enableAutoload()`                   | 10.1.0 |                                                                                         |
| [#5315](https://github.com/sebastianbergmann/phpunit/issues/5315) | `MockBuilder::disableArgumentCloning()`           | 10.1.0 |                                                                                         |
| [#5315](https://github.com/sebastianbergmann/phpunit/issues/5315) | `MockBuilder::enableArgumentCloning()`            | 10.1.0 |                                                                                         |
| [#5320](https://github.com/sebastianbergmann/phpunit/issues/5320) | `MockBuilder::addMethods()`                       | 10.1.0 |                                                                                         |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::onConsecutiveCalls()`                  | 10.3.0 | Use `$double->willReturn()` instead of `$double->will($this->onConsecutiveCalls())`     |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnArgument()`                      | 10.3.0 | Use `$double->willReturnArgument()` instead of `$double->will($this->returnArgument())` |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnCallback()`                      | 10.3.0 | Use `$double->willReturnCallback()` instead of `$double->will($this->returnCallback())` |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnSelf()`                          | 10.3.0 | Use `$double->willReturnSelf()` instead of `$double->will($this->returnSelf())`         |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnValue()`                         | 10.3.0 | Use `$double->willReturn()` instead of `$double->will($this->returnValue())`            |
| [#5423](https://github.com/sebastianbergmann/phpunit/issues/5423) | `TestCase::returnValueMap()`                      | 10.3.0 | Use `$double->willReturnMap()` instead of `$double->will($this->returnValueMap())`      |

#### Miscellaneous

| Issue                                                             | Description                                                    | Since  | Replacement                                                        |
|-------------------------------------------------------------------|----------------------------------------------------------------|--------|--------------------------------------------------------------------|
| [#5236](https://github.com/sebastianbergmann/phpunit/issues/5236) | `PHPUnit\Framework\Attributes\CodeCoverageIgnore()`            | 10.1.0 |                                                                    |
| [#5214](https://github.com/sebastianbergmann/phpunit/issues/5214) | `TestCase::iniSet()`                                           | 10.3.0 |                                                                    |
| [#5216](https://github.com/sebastianbergmann/phpunit/issues/5216) | `TestCase::setLocale()`                                        | 10.3.0 |                                                                    |
| [#5236](https://github.com/sebastianbergmann/phpunit/issues/5513) | `PHPUnit\Framework\Attributes\IgnoreClassForCodeCoverage()`    | 10.4.0 | Use `@codeCoverageIgnore` annotation in the class' doc-comment     |
| [#5236](https://github.com/sebastianbergmann/phpunit/issues/5513) | `PHPUnit\Framework\Attributes\IgnoreMethodForCodeCoverage()`   | 10.4.0 | Use `@codeCoverageIgnore` annotation in the method's doc-comment   |
| [#5236](https://github.com/sebastianbergmann/phpunit/issues/5513) | `PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage()` | 10.4.0 | Use `@codeCoverageIgnore` annotation in the function's doc-comment |

### Running Tests

| Issue                                                             | Description                                                                                           | Since  | Replacement |
|-------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------|--------|-------------|
| [#5481](https://github.com/sebastianbergmann/phpunit/issues/5481) | `dataSet` attribute for `testCaseMethod` elements in the XML document generated by `--list-tests-xml` | 10.4.0 |             |

### Extending PHPUnit

| Issue | Description                                                                                                                  | Since  | Replacement                                                                    |
|-------|------------------------------------------------------------------------------------------------------------------------------|--------|--------------------------------------------------------------------------------|
|       | `PHPUnit\TextUI\Configuration\Configuration::coverageExcludeDirectories()`                                                   | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->excludeDirectories()`   |
|       | `PHPUnit\TextUI\Configuration\Configuration::coverageExcludeFiles()`                                                         | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->excludeFiles()`         |
|       | `PHPUnit\TextUI\Configuration\Configuration::coverageIncludeDirectories()`                                                   | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->includeDirectories()`   |
|       | `PHPUnit\TextUI\Configuration\Configuration::coverageIncludeFiles()`                                                         | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->includeFiles()`         |
|       | `PHPUnit\TextUI\Configuration\Configuration::loadPharExtensions()`                                                           | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::noExtensions()`                   |
|       | `PHPUnit\TextUI\Configuration\Configuration::hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport()`                       | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->notEmpty()`             |
|       | `PHPUnit\TextUI\Configuration\Configuration::restrictDeprecations()`                                                         | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->restrictDeprecations()` |
|       | `PHPUnit\TextUI\Configuration\Configuration::restrictNotices()`                                                              | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->restrictNotices()`      |
|       | `PHPUnit\TextUI\Configuration\Configuration::restrictWarnings()`                                                             | 10.2.0 | `PHPUnit\TextUI\Configuration\Configuration::source()->restrictWarnings()`     |
|       | `PHPUnit\TextUI\Configuration\Configuration::cliArgument()`                                                                  | 10.4.0 | `PHPUnit\TextUI\Configuration\Configuration::cliArguments()[0]`                |
|       | `PHPUnit\TextUI\Configuration\Configuration::hasCliArgument()`                                                               | 10.4.0 | `PHPUnit\TextUI\Configuration\Configuration::hasCliArguments()`                |
|       | `PHPUnit\Framework\Constraint\Constraint::exporter()`                                                                        | 10.4.0 |                                                                                |
|       | `PHPUnit\TextUI\Configuration\Configuration::registerMockObjectsFromTestArgumentsRecursively()`                              | 10.5.3 |                                                                                |
|       | `Test\AssertionFailed` and `Test\AssertionSucceeded` events                                                                  | 10.5.3 |                                                                                |
|       | `PHPUnit\Runner\Extension\Facade::requireExportOfObjects()` and `PHPUnit\Runner\Extension\Facade::requiresExportOfObjects()` | 10.5.3 |                                                                                |

## Hard Deprecations

This functionality is currently [hard-deprecated](https://phpunit.de/backward-compatibility.html#hard-deprecation):

### Writing Tests

#### Miscellaneous

| Issue                                                             | Description                                                                                                                                               | Since   | Replacement |
|-------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------|---------|-------------|
| [#5100](https://github.com/sebastianbergmann/phpunit/issues/5100) | Support for non-static data provider methods, non-public data provider methods, and data provider methods that declare parameters                         | 10.0.0  |             |
| [#5812](https://github.com/sebastianbergmann/phpunit/pull/5812)   | Support for string array keys in data sets returned by data provider methods that do not match the parameter names of the test method(s) that use(s) them | 10.5.18 |             |
=======
| Issue                                                             | Description                       | Since  | Replacement                                                                                                                                                                                                                                                                                                                                                                                                                       |
|-------------------------------------------------------------------|-----------------------------------|--------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [#6052](https://github.com/sebastianbergmann/phpunit/issues/6052) | `Assert::isType()`                | 11.5.0 | Use `isArray()`, `isBool()`, `isCallable()`, `isFloat()`, `isInt()`, `isIterable()`, `isNull()`, `isNumeric()`, `isObject()`, `isResource()`, `isClosedResource()`, `isScalar()`, or `isString()` instead                                                                                                                                                                                                                         |
| [#6055](https://github.com/sebastianbergmann/phpunit/issues/6055) | `Assert::assertContainsOnly()`    | 11.5.0 | Use `assertContainsOnlyArray()`, `assertContainsOnlyBool()`, `assertContainsOnlyCallable()`, `assertContainsOnlyFloat()`, `assertContainsOnlyInt()`, `assertContainsOnlyIterable()`, `assertContainsOnlyNumeric()`, `assertContainsOnlyObject()`, `assertContainsOnlyResource()`, `assertContainsOnlyClosedResource()`, `assertContainsOnlyScalar()`, or `assertContainsOnlyString()` instead                                     |
| [#6055](https://github.com/sebastianbergmann/phpunit/issues/6055) | `Assert::assertNotContainsOnly()` | 11.5.0 | Use `assertContainsNotOnlyArray()`, `assertContainsNotOnlyBool()`, `assertContainsNotOnlyCallable()`, `assertContainsNotOnlyFloat()`, `assertContainsNotOnlyInt()`, `assertContainsNotOnlyIterable()`, `assertContainsNotOnlyNumeric()`, `assertContainsNotOnlyObject()`, `assertContainsNotOnlyResource()`, `assertContainsNotOnlyClosedResource()`, `assertContainsNotOnlyScalar()`, or `assertContainsNotOnlyString()` instead |
| [#6059](https://github.com/sebastianbergmann/phpunit/issues/6059) | `Assert::containsOnly()`          | 11.5.0 | Use `containsOnlyArray()`, `containsOnlyBool()`, `containsOnlyCallable()`, `containsOnlyFloat()`, `containsOnlyInt()`, `containsOnlyIterable()`, `containsOnlyNumeric()`, `containsOnlyObject()`, `containsOnlyResource()`, `containsOnlyClosedResource()`, `containsOnlyScalar()`, or `containsOnlyString()`  instead                                                                                                            |
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
